# Fit city bike permits

Based from our single-page project template and SXSW temporary permits, this is a leaflet map using free and Open Streetmap tiles.

Built for Pam Leblanc story running 4/6/2015. Should take place of story online. [This should be published link](http://projects.statesman.com/features/fit-city-bike-routes/).

Used [geojson.io](http://geojson.io/) to create the routes.

## Mobile & Social

Built on Twitter bootstrap for mobile, so everything resizes for phone. Standard sharing buttons, along with a custom share image of the map plots.

------------------

## Single-page project

Framework for a single page project, though it could be multiple pages. Just less complex than our immersive-template setup

## Steps when you set up a project

* use `package.json` and `npm install`
* use `bower.json` and `bower install`
* use a public folder for the published files:
	* assets: images and other accces
	* dist: where js and css is compiled
	* fonts: for font-awesome
	* includes: files for metrics, advertising and other includes
* use a src for build components
	* js: for project specific files
	* less: for less css source files.
* use ftpush grunt task to publish public.
	* The path is in `Gruntfile.js`. Add the username/password into a file called .ftppass as per [ftpush docs](https://www.npmjs.com/package/grunt-ftpush). Make sure that file is in the .gitignore.
