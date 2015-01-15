=== WP Resume Shortcode ===
Contributors: kicoe
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=B6TNY6XGYV8GE
Tags: shortcode, resume
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Creating an online resume the easy way: Just use this teeny tiny shortcode and voila !

== Description ==

This plugin helps you create a better resume, without managing filthy content types and overloading your database with useless stuff.
Just use a shortcode to describe each one of you experiences, with optionnal attributes to share dates, company, positions or content.
It also works for sharing education and other activities.

The whole point of this plugin is to avoid recording any parameter in database. 
That's why you can configure each item of the curriculum only by setting shortcode parameters.


== Installation ==

= Just add the shortcode [itemcv] in your page content. =
You can chose to share the amazing stuff you have done during this experience, by writing it between [itemcv] and [/itemcv].

= Some optional attributes are also available =

* start date : optional, start date of the experience (works together with enddate)
* dateseparator : optional, default is linebreak.
* enddate : optional, end date of the experience (works together with startdate). Write "Today" if current position.
* line1 : optional, for example the employer (standalone)
* lineseparator : optional, default is linebreak.
* line2 : optional, for example the position (standalone)

= For example =

[itemcv startdate="January 2012" enddate="December 2013" line1="Apple Inc." lineseparator="-" line2="Chief Marketing Officer"] 
I have designed the new iPhone 7
[/itemcv]

= More =

[BitBucket]: https://bitbucket.org/patrickroux/wordpress-resume-shortcode
            "BitBucket"

== Frequently Asked Questions ==



== Screenshots ==

1. Text editor in action 
2. The result with no CSS formating
3. The result with a bit of CSS formating

== Changelog ==

= 0.1 =
* First version. Simple.

= 1.0 =
* Now is permitted the use of either line1 only, or line2 only, or both, or none.
* Addition of new parameters : dateseparator and lineseparator. HTML allowed: linebreak, hr, -, ...). Default is linebreak.

= 1.1 =
* Now compatible up to wordpress v4.1