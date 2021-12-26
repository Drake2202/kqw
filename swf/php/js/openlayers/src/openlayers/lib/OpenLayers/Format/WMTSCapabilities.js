/* Copyright (c) 2006-2010 by OpenLayers Contributors (see authors.txt for 
 * full list of contributors). Published under the Clear BSD license.  
 * See http://svn.openlayers.org/trunk/openlayers/license.txt for the
 * full text of the license. */

/**
 * @requires OpenLayers/Format/XML.js
 */
 
/**
 * Class: OpenLayers.Format.WMTSCapabilities
 * Read WMTS Capabilities.
 * 
 * Inherits from:
 *  - <OpenLayers.Format.XML>
 */
OpenLayers.Format.WMTSCapabilities = OpenLayers.Class(OpenLayers.Format.XML, {
    
    /**
     * APIProperty: defaultVersion
     * {String} Version number to assume if none found.  Default is "1.0.0".
     */
    defaultVersion: "1.0.0",
    
    /**
     * APIProperty: version
     * {String} Specify a version string if one is known.
     */
    version: null,

    /**
     * Property: parser
     * {<OpenLayers.Format>} A cached versioned format used for reading.
     */
    parser: null,
    
    /**
     * APIProperty: yx
     * {Object} Members in the yx object are used to determine if a CRS URN
     *     corresponds to a CRS with y,x axis order.  Member names are CRS URNs
     *     and values are boolean.  By default, the following CRS URN are 
     *     assumed to correspond to a CRS with y,x axis order:
     *
     * * urn:ogc:def:crs:EPSG::4326
     */
    yx: {
        "urn:ogc:def:crs:EPSG::4326": true
    },

    /**
     * Constructor: OpenLayers.Format.WMTSCapabilities
     * Create a new parser for WMTS capabilities.
     *
     * Parameters:
     * options - {Object} An optional object whose properties will be set on
     *     this instance.
     */
    initialize: function(options) {
        OpenLayers.Format.XML.prototype.initialize.apply(this, [options]);
        this.options = options;
    },

    /**
     * APIMethod: read
     * Read capabilities data from a string, and return information about
     * the service (offering and observedProperty mostly).
     * 
     * Parameters: 
     * data - {String} or {DOMElement} data to read/parse.
     *
     * Returns:
     * {Object} Info about the WMTS Capabilities
     */
    read: function(data) {
        if (typeof data == "string") {
            data = OpenLayers.Format.XML.prototype.read.apply(this, [data]);
        }
        var root = data.documentElement;
        var version = this.version || root.getAttribute("version") || this.defaultVersion;
        if (!this.parser || this.parser.version !== version) {
            var constr = OpenLayers.Format.WMTSCapabilities[
                "v" + version.replace(/\.g, "_")
            ];
            if (!constr) {
                throw new Error("Can't find a WMTS capabilities parser for version " + version);
            }
            this.parser = new constr(this.options);
        }
        return this.parser.read(data);
    },

    /**
     * APIMethod: createLayer
     * Create a WMTS layer given a capabilities object.
     *
     * Parameters:
     * capabilities - {Object} The object returned from a <read> call to this 
     *     format.
     * config - {Object} Configuration properties for the layer.  Defaults for
     *     the layer will apply if not provided.
     *
     * Required config properties:
     * layer - {String} The layer identifier.
     * matrixSet - {String} The matrix set identifier.
     *
     * Returns:
     * {<OpenLayers.Layer.WMTS>} A properly configured WMTS layer.  Throws an
     *     error if an incomplete config is provided.  Returns undefined if no
     *     layer could be created with the provided config.
     */ 
    createLayer: function(capabilities, config) {
        var layer;

        // confirm required properties are supplied in config
        var required = {
            layer: true,
            matrixSet: true
        };
        for (var prop in required) {
            if (!(prop in config)) {
                throw new Error("Missing property '" + prop + "' in layer configuration.");
            }
        }

        var contents = capabilities.contents;
        var matrixSet = contents.tileMatrixSets[config.matrixSet];

        // find the layer definition with the given identifier
        var layers = contents.layers;
        var layerDef;
        for (var i=0, ii=contents.layers.length; i<ii; ++i) {
            if (contents.layers[i].identifier === config.layer) {
                layerDef = contents.layers[i];
                break;
            }
        }
        
        if (layerDef && matrixSet) {
            // get the default style for the layer
            var style;
            for (var i=0, ii=layerDef.styles.length; i<ii; ++i) {
                style = layerDef.styles[i];
                if (style.isDefault) {
                    break;
                }
            }
            
            layer = new OpenLayers.Layer.WMTS(
                OpenLayers.Util.applyDefaults(config, {
                    url: capabilities.operationsMetadata.GetTile.dcp.http.get,
                    name: layerDef.title,
                    style: style,
                    matrixIds: matrixSet.matrixIds
                })
            );
        }
        return layer;
    },
    
    CLASS_NAME: "OpenLayers.Format.WMTSCapabilities" 

});
