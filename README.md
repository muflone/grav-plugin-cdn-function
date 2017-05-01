# Grav CDN Function Plugin


`CDN Function` is a [Grav][grav] Plugin that allows to load resources from
an external CDN to speed up loading and to save bandwidth.


# Installation

To install this plugin, just download the zip version of this repository and
unzip it under `/your/site/grav/user/plugins`.
Then, rename the folder to `cdn-function`.

You should now have all the plugin files under

	/your/site/grav/user/plugins/cdn-function

# Usage for content authors

To use this plugin insert in any Twig page the following tag:

    cdn('/some/resource.png')

Depending on the plugin configuration this would be translated in:

    http://cdn.muflone.com/some/resource.png

[grav]: http://github.com/getgrav/grav
