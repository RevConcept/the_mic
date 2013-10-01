the_mic
=======

Web development for The Majestic Isle Casino website.

<-- Backend Setup (Wordpress) -->

Three Options Pages: 

1. Home Page -
	Home Page options are setup into tabs: top section, section two, section three, section four. Each tab has the respective fields for that section, such as image, icon, title, subtitle, content, etc. Section Four is the area on the home page with three columns. This section uses a repeater field for each column. 
3. Google Maps -
	Embedded Google Map of Antigua Barbuda is the default. Map options include, LatLan and zoom level.
	Note: no pin point at this time, but an option can easily be added.
2. Footer -
	Footer options include sitemap, address, phone, email, and social links. 

<-- Template Setup for Home (Developer) -->

Functions (functions.php):

1. mic_print_top_section()
2. mic_print_section_two() 
3. mic_print_section_three()
4. mic_print_section_four()
5. mic_print_sitemap()
6. mic_print_addr()
7. mic_print_social_icons()