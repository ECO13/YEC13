*YEC:13 for Elgg 1.8 is a fork off the Wordpress like shortcodes system
[Shortcodes 1.8.X for Elgg][1] by Mohammed Aqeel @ [Team Webgalli][2].*

# background

With 'Shortcodes for Elgg' Team Webgalli introduced WordPress's
[Shortcode API][3] in Elgg. While there are many other and easier
ways to embed different kind of media, the shortcode API has
seamingly unlimited features. 

-------------------------------------------------------------------
> "Sky is the limit with this plugin."
> - [Team Webgalli][4]
-------------------------------------------------------------------

From that perspective, the plugin seems underrated. It is my guess
that user friendliness is an important issue. On my site, the plugin
would be rather useless without a user manual.

So, I added features, I replaced the content of the lightbox and a
[user manual][5] is in the making. 

# very beta!

I hope the update will be useful, but pls do note that I'm more a
designer than a developer and more a DIY'er than a designer, that this
is the first release and my first plugin fork ever. So, I most likely
made multiple mistakes.

# features

## embed video

from:

- Blip
- CollegeHumor
- Daily Motion
- IMDb
- LiveLeak
- Metacafe
- National Geographic
- Reuters
- TED talks
- Ustream
- Veoh
- Viddler
- Vimeo
- YouTube
- ZippCast

## embed audio

from:

- Bandcamp
- SoundCloud

## embed Google Document Viewer

works with the following file types:

- PDF documents (.pdf),
- Microsoft PowerPoint (.ppt, .pptx)
- Microsoft Word (.doc, .docx)
- Microsoft Excel (.xls, .xlsx)
- Open Document Spreadsheet (.ods)
- Apple Pages (.pages)
- Adobe Illustrator (.ai)
- Adobe Photoshop (.psd)
- Autodesk AutoCad (.dxf)
- Scalable Vector Graphics (.svg)
- PostScript (.eps, .ps)
- TrueType (.ttf)
- XML Paper Specification (.xps)
- Plain Text (.txt)
- ZIP archive (.zip)
- RAR archive (.rar)

and probably more.

## embed maps

from:

- Google Maps
- OpenStreetMap

## embed social media

- Facebook posts
- Tweets
- Twitter timelines
- Twitter buttons

## embed presentations

- from SlideShare

## generate snapshots

Snapshots are some kind of screenshots through a service provided
by WordPress.com.

## embed charts

- only [deprecated Google image charts][6] are available

## embed iframes

You can try to embed anything else in an iframe.

# known issues

- The button to close the lightbox window with the example code was
in the middle of the screen and the content in the lightbox wasn't
visible. I changed this adding css for the #fancybox-wrap ID to
yec13/views/default/yec13/css.php, but I doubt this is the way to
go, because in Shortcode 1.8.X, this didn't occur.

- I've no clue how to make the shortcode work with Yahoo video. If
it worked before, it should still work.

- There is an embed code for videos from Upload Society, but there
is still something wrong with it. I won't look into it, unless I know
someone misses it.

# documentation

info, manual, examples:
http://r-evolutie.net/pages/view/393/your-embed-code-yec13-for-elgg

---
[1]: https://community.elgg.org/plugins/1047972/1.1/shortcodes-18x				"plugin: Shortcodes 1.8.X for Elgg 1.8"
[2]: http://www.webgalli.com/									"Team Webgalli website"
[3]: http://codex.wordpress.org/Shortcode_API							"Shortcode API @ WordPress Codex"
[4]: http://www.webgalli.com/blog/shortcodes-for-elgg/						"Shortcodes for Elgg @ Team Webgalli blog"
[5]: http://r-evolutie.net/pages/view/394/yec13-user-manual					"YEC:13 user manual"
[6]: https://developers.google.com/chart/image/							"Google image charts are depricated since 2012.04.20"
