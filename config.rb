# Require any additional compass plugins here.
require "susy"
# Set this to the root of your project when deployed:

http_path = "/uglyfruit/"
css_dir = ""
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"

# You can select your preferred output style here (can be overridden via the command line):
 output_style = :compact

# To enable relative paths to assets via compass helper functions. Uncomment:
 relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
preferred_syntax = :scss

output_style = :nested # by Compass.app 

sass_options = {:debug_info=>false} # by Compass.app 
line_comments = false # by Compass.app 