# Craft Plugin Vulnerabilities

Craft plugin vulnerabilities can be listed in a JSON feed for use with the [Sherlock Plugin](https://www.putyourlightson.net/craft-sherlock). 

The [vulnerabilities.json](https://github.com/putyourlightson/craft-plugin-vulnerabilities/blob/master/vulnerabilities.json) feed is the default feed used by the Sherlock plugin.

The JSON feed must be in the following format:

    [
        {
	        "handle": "dummy",
		    "version": "0.0.1",
		    "fixedVersion": "0.0.2",
		    "description": "Fake bug that contains a vulnerability",
		    "url": "https://github.com/putyourlightson/craft-plugin-vulnerabilities/tree/master/plugins/dummy",
        },
        {
	        "handle": "dummy",
		    "version": "0.0.7",
		    "fixedVersion": "0.0.8",
		    "description": "Fake bug that contains a vulnerability",
		    "url": "https://github.com/putyourlightson/craft-plugin-vulnerabilities/tree/master/plugins/dummy",
        }
    ]

Notes:
- The feed must be valid JSON
- The feed’s URL must begin with "https://" (so it is fetched over SSL)
- Each plugin vulnerability must contain `handle`, `version`, `description` and `url` attributes
- The `fixedVersion` attribute is optional and indicates the version of the plugin in which the vulnerability was fixed
