<?php
/*
Your Embed Code by ECO13 (YEC:13)					a fork off Shortcodes 1.8.X
CMS:			Elgg 1.8.X					Elgg 1.8.X
author:			Axel Vanderhaeghen				Mohammed Aqeel
organisation:		ECO13						Team Webgalli
url:			http://r-evolutie.net				http://webgalli.com
licence:		GNU General Public License, version 3		GNU General Public License, version 2
copyright: 		2014 © ECO13					2011-2015 © Team Webgalli
*/

 
/**
 * Google Document Viewer
 * [doc width="100%" height="450px" url='http://r-evolutie.net/img/yec/YEC13-for-elgg-1.8-embed-anything.pdf'] 
 */

function doc_function($atts) {
   extract(elgg_shortcode_atts(array(
		'url' => 'http://',
		'width' => '640',
		'height' => '480'
   ), $atts));
   return '<iframe class="yec-doc yec-'.$width.' yec-'.$height.'" src="http://docs.google.com/viewer?url=' . $url . '&embedded=true" style="width:' .$width. '; height:' .$height. ';">Your browser does not support iframes</iframe>';
}
elgg_add_shortcode('doc', 'doc_function');


/*
	Embed Charts 
	[chart data="31.52,37.79,20.67,10.02" bg="F7F9FA" labels="video|audio|websnap|pdf" colors="3BAD13,6BAD13,9BAD13,EDEF00" size="488x200" title="Embedded Content" type="pie"]
*/

function chart_shortcode( $atts ) {
	extract(elgg_shortcode_atts(array(
	    'data' => '',
	    'colors' => '',
	    'size' => '400x200',
	    'bg' => 'ffffff',
	    'title' => '',
	    'labels' => '',
	    'advanced' => '',
	    'type' => 'pie'
	), $atts));
	switch ($type) {
		case 'line' :
			$charttype = 'lc'; break;
		case 'xyline' :
			$charttype = 'lxy'; break;
		case 'sparkline' :
			$charttype = 'ls'; break;
		case 'meter' :
			$charttype = 'gom'; break;
		case 'scatter' :
			$charttype = 's'; break;
		case 'venn' :
			$charttype = 'v'; break;
		case 'pie' :
			$charttype = 'p3'; break;
		case 'pie2d' :
			$charttype = 'p'; break;
		default :
			$charttype = $type;
		break;
	}
	if ($title) $string .= '&chtt='.$title.'';
	if ($labels) $string .= '&chl='.$labels.'';
	if ($colors) $string .= '&chco='.$colors.'';
	$string .= '&chs='.$size.'';
	$string .= '&chd=t:'.$data.'';
	$string .= '&chf='.$bg.'';
	return '<img class="yec-chart yec-'.$size.' yec-'.$bg.' yec-'.$type.'" title="'.$title.'" src="http://chart.apis.google.com/chart?cht='.$charttype.''.$string.$advanced.'" alt="'.$title.'" />';
}
elgg_add_shortcode('chart', 'chart_shortcode');


/*
	Snap Webpages
	[snap url="http://r-evolutie.net/" alt="(R).NET - (r)evolutionary network powered by Elgg" w="780" h="500"]
*/

function webpage_snaps($atts, $content = null) {
        extract(elgg_shortcode_atts(array(
			"snap" => 'http://s.wordpress.com/mshots/v1/',
			"url" => 'http://www.webgalli.com',
			"alt" => 'My image',
			"w" => '400', // width
			"h" => '300' // height
        ), $atts));
		$img = '<img class="yec-url yec-snap yec-'.$h.' yec-'.$w.'" src="' . $snap . '' . urlencode($url) . '?w=' . $w . '&h=' . $h . '" alt="' . $alt . '"/>';
        return $img;
}
elgg_add_shortcode("snap", "webpage_snaps");


/*
	Embed Classic Google Maps
	[googlemap width="100%" height="500" src="http://maps.google.com/maps?q=Heraklion,+Greece&hl=en&ll=35.327451,25.140495&spn=0.233326,0.445976& sll=37.0625,-95.677068&sspn=57.161276,114.169922&oq=Heraklion&hnear=Heraklion,+Greece&t=h&z=12"]
*/

function googlemap_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '640',
      "height" => '480',
      "src" => ''
   ), $atts));
   return '<iframe class="yec-map yec-gmap yec-'.$height.' yec-'.$width.'" width="'.$width.'" height="'.$height.'" src="'.$src.'&output=embed&output=classic" ></iframe>';
}
elgg_add_shortcode("googlemap", "googlemap_function");


/*
	Embed New Google Maps
	[gmap width="100%" height="500" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2653.711611257517!2d-61.440209591021464!3d10.585284977608895!2m3!1f270!2f0!3f0!3m2!1i1024!2i768!4f35!5e1!3m2!1snl!2s!4v1404511799469"]
*/

function gmap_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '640',
      "height" => '480',
      "src" => ''
   ), $atts));
   return '<iframe class="yec-map yec-gmap yec-'.$height.' yec-'.$width.'" src="'.$src.'" width="'.$width.'" height="'.$height.'" frameborder="0" style="border:0"></iframe>';
}
elgg_add_shortcode("gmap", "gmap_function");


/*
	Embed Open Street Maps
	[osmap width="100%" height="500" src="http://www.openstreetmap.org/export/embed.html?bbox=-4.0869140625%2C47.19717795172789%2C14.26025390625%2C53.55988897245466&layer=mapnik&marker=50.48547354578499%2C5.086669921875"]
*/

function osmap_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '640',
      "height" => '480',
      "src" => ''
   ), $atts));
   return '<iframe class="yec-map yec-osm yec-'.$height.' yec-'.$width.'" width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'"></iframe>';
}
elgg_add_shortcode("osmap", "osmap_function");


/*
	Embed Videos
	site: YouTube						[video site="youtube" id="28_oWJspzjg" w="100%" h="450"]
	site: Vimeo							[video site="vimeo" id="79776412" w="100%" h="450"]
	site: TED							[video site="ted" id="lang/nl/louie_schwartzberg_nature_beauty_gratitude.html" w="100%" h="450"]
	site: IMDb							[video site="imdb" id="vi2777000217" w="100%" h="450"]
	site: ZippCAST						[video site="zippcast" id="9fddcfe66efe033ae08" w="100%" h="450"]
	site: UStream						[video site="ustream" id="17074538" w="100%" h="450"]
	site: LiveLeak						[video site="liveleak" id="f=f479c7c627cb" w="100%" h="450"]
	site: UploadSociety					[video site="ulsoc" id="54991" w="100%" h="450"]
	site: National Geographic Video		[video site="natgeovid" id="00000147-160e-da16-a547-de5f588a0001" w="100%" h="450"]
	site: National Geographic Channel	[video site="natgeochan" id="channel/how-to-survive-the-end-of-the-world/videos/floating-cities" w="100%" h="450"]
	site: Viddler						[video site="viddler" id="5b17d44f" w="100%" h="450"]
	site: CollegeHumor					[video site="collegehumor" id="6979707" w="100%" h="450"]
	...
*/

function video_sc($atts, $content=null) {
	extract(
		elgg_shortcode_atts(array(
			'site' => 'youtube',
			'id' => '',
			'w' => '600',
			'h' => '370'
		), $atts)
	);
	if ( $site == "youtube" ) { $src = 'http://www.youtube-nocookie.com/embed/'.$id.'?autohide=1&amp;controls=2&amp;modestbranding=1&amp;rel=0&amp;showinfo=0'; }
	else if ( $site == "vimeo" ) { $src = 'http://player.vimeo.com/video/'.$id; }
	else if ( $site == "dailymotion" ) { $src = 'http://www.dailymotion.com/embed/video/'.$id; }
	else if ( $site == "yahoo" ) { $src = 'http://d.yimg.com/nl/vyc/site/player.html#vid='.$id; }
	else if ( $site == "bliptv" ) { $src = 'http://a.blip.tv/scripts/shoggplayer.html#file=http://blip.tv/rss/flash/'.$id; }
	else if ( $site == "veoh" ) { $src = 'http://www.veoh.com/static/swf/veoh/SPL.swf?videoAutoPlay=0&permalinkId='.$id; }
	else if ( $site == "viddler" ) { $src = 'http://www.viddler.com/simple/'.$id; }
	else if ( $site == "ted" ) { $src = 'http://embed.ted.com/talks/'.$id; }
	else if ( $site == "reuters" ) { $src = 'http://www.reuters.com/resources_v2/flash/video_embed.swf?videoId='.$id; }
	else if ( $site == "metacafe" ) { $src = 'http://www.metacafe.com/embed/'.$id; }
	else if ( $site == "imdb" ) { $src = 'http://www.imdb.com/video/imdb/'.$id.'/imdb/embed?autoplay=false'; }
	else if ( $site == "zippcast" ) { $src = '//www.zippcast.com/videoview.php?vplay='.$id.'&auto=no'; }
	else if ( $site == "collegehumor" ) { $src = 'http://www.collegehumor.com/e/'.$id; }
	else if ( $site == "ustream" ) { $src = 'http://www.ustream.tv/embed/'.$id.'?ub=85a901&amp;lc=85a901&amp;oc=ffffff&amp;uc=ffffff&amp;v=3&amp;wmode=direct'; }
	else if ( $site == "liveleak" ) { $src = 'http://www.liveleak.com/ll_embed?'.$id; }
	else if ( $site == "ulsoc" ) { $src = 'http://uploadsociety.com/player/embed_player.php?vid='.$id.'&width='.$w.'&height='.$h.'&autoplay=no'; }
	else if ( $site == "natgeovid" ) { $src = 'http://player.d.nationalgeographic.com/players/ngsvideo/share/?feed=http://feed.theplatform.com/f/ngs/dCCn2isYZ9N9&guid='.$id.'&link=http://video.nationalgeographic.com/video/'; }
	else if ( $site == "natgeochan" ) { $src = 'http://channel.nationalgeographic.com/'.$id.'/embed/'; }
	if ( $id != '' ) {
		return '<iframe class="yec-video yec-'.$site.' yec-'.$w.' yec-'.$h.'" width="'.$w.'" height="'.$h.'" src="'.$src.'" allowFullScreen frameborder="0" scrolling="no"></iframe>';
	}
}
elgg_add_shortcode('video','video_sc');


/*
	Embed Blip
	[blip id="gfoVg6rhLgI" width="100%" height="450"]
*/

function blip_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '100%',
      "height" => '450',
      "id" => 'AYOY_gsC'
   ), $atts));
   return '<iframe class="yec-video yec-blip" id="blip-'.$id.'" src="http://blip.tv/play/'.$id.'.x?p=1" width="'.$width.'" height="'.$height.'" frameborder="0" allowfullscreen></iframe><embed type="application/x-shockwave-flash" src="http://a.blip.tv/api.swf#'.$id.'" style="display:none"></embed>';
}
elgg_add_shortcode("blip", "blip_function");


/*
	Embed Viddler (with comments)
	[viddler width="100%" height="450" id="2e2a21b" secret="62240201"]
*/

function viddler_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '780',
      "height" => '635',
      "id" => '2e2a21b',
	  "secret" => '62240201'
   ), $atts));
   return '<iframe class="yec-video yec-'.$site.'" id="viddler-'.$id.'" src="//www.viddler.com/embed/'.$id.'/?f=1&offset=0&autoplay=0&player=full&secret='.$secret.'&disablebranding=1" width="'.$width.'" height="'.$height.'" frameborder="0" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>';
}
elgg_add_shortcode("viddler", "viddler_function");


/*
	Embed SoundCloud
	[soundcloud url="https://api.soundcloud.com/tracks/153711584" params="auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true" width="100%" height="450" iframe="true" /]
*/

function embed_soundcloud($atts, $content=null) {
	extract(
		elgg_shortcode_atts(array(
			'url' => 'https://api.soundcloud.com/tracks/153711584',
			'params' => 'auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true',
			'width' => '100%',
			'height' => '450'
		), $atts));
	return '<iframe class="yec-audio yec-soundcloud" width="'.$width.'" height="'.$height.'" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url='.$url.'&amp;'.$params.'"></iframe>';
}
elgg_add_shortcode('soundcloud','embed_soundcloud');


/*
	Embed Bandcamp
	layout: slim + artwork						- [bandcamp width=100% height=42px album=2758801450 size=small bgcol=ffffff linkcol=0687f5]
	layout: standard + big artwork + tracklist	- [bandcamp width=350px height=786px album=2758801450 size=large bgcol=ffffff linkcol=0687f5]
*/

function bandcamp_all($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '100%',
      "height" => '42px',
      "album" => '2758801450',
      "size" => 'small',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcamp", "bandcamp_all");


/*
	Embed Bandcamp
	layout: slim									- [bandcampart width=100% height=42px album=2758801450 size=small bgcol=ffffff linkcol=0687f5 artwork=none]
	layout: standard + tracklist					- [bandcampart width=350px height=472px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 artwork=none]
	layout: standard + small artwork + tracklist	- [bandcampart width=400px height=472px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 artwork=small]
*/

function bandcamp_art($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '100%',
      "height" => '42px',
      "album" => '2758801450',
      "size" => 'small',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5',
	  "artwork" => 'none'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/artwork='.$artwork.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcampart", "bandcamp_art");


/*
	Embed Bandcamp
	layout: artwork-only							- [bandcampartonly width=350px height=350px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 minimal=true]
*/

function bandcamp_artonly($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '350px',
      "height" => '350px',
      "album" => '2758801450',
      "size" => 'large',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5',
	  "minimal" => 'true'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/minimal='.$minimal.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcampartonly", "bandcamp_artonly");


/*
	Embed Bandcamp
	layout: no tracklist							- [bandcampnolist width=350px height=470px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 tracklist=false]
*/

function bandcamp_nolist($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '350',
      "height" => '470px',
      "album" => '2758801450',
      "size" => 'large',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5',
	  "tracklist" => 'false'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/tracklist='.$tracklist.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcampnolist", "bandcamp_nolist");


/*
	Embed Bandcamp
	layout: no tracklist + no art				- [bandcampnolistart width=100% height=120px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 tracklist=false artwork=none]
	layout: no tracklist + small art				- [bandcampnolistart width=100% height=120px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 tracklist=false artwork=small]
*/

function bandcamp_nolistart($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '100%',
      "height" => '120px',
      "album" => '2758801450',
      "size" => 'large',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5',
	  "tracklist" => 'false',
	  "artwork" => 'small'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/tracklist='.$tracklist.'/artwork='.$artwork.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcampnolistart", "bandcamp_nolistart");


/*
	Embed Bandcamp
	layout: merch thumbs							- [bandcampmerch width=350px height=853px album=2758801450 size=large bgcol=ffffff linkcol=0687f5 package=1418166557]
*/

function bandcamp_merch($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '350px',
      "height" => '853px',
      "album" => '2758801450',
      "size" => 'large',
      "bgcol" => 'ffffff',
      "linkcol" => '0687f5',
	  "package" => '1418166557'
   ), $atts));
   return '<iframe class="yec-audio yec-bandcamp yec-'.$size.' yec-'.$width.' yec-'.$height.' yec-'.$artwork.'" style="border: 0; width: '.$width.'; height: '.$height.';" src="https://bandcamp.com/EmbeddedPlayer/album='.$album.'/size='.$size.'/bgcol='.$bgcol.'/linkcol='.$linkcol.'/package='.$package.'/transparent=true/" seamless></iframe>';
}
elgg_add_shortcode("bandcampmerch", "bandcamp_merch");


/*
	Embed SlideShare
	[slideshare width="780" height="635" id="36541841"]
*/

function slideshare_function($atts, $content = null) {
   extract(elgg_shortcode_atts(array(
      "width" => '780',
      "height" => '635',
      "id" => ''
   ), $atts));
   return '<iframe class="yec-doc yec-slideshare yec-'.$height.' yec-'.$width.'" src="//www.slideshare.net/slideshow/embed_code/'.$id.'" width="'.$width.'" height="'.$height.'" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px 1px 0; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>';
}
elgg_add_shortcode("slideshare", "slideshare_function");


/*
	Embed iframe
	[iframe url="http://r-evolutie.net/" w="100%" h="500"]
*/

function embed_any_url($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'w' 	=> '100%',
			'h'		=> 'auto',
			'url' 	=> 'http://',
		), $atts)
	);
   return '<iframe class="yec-url yec-iframe yec-'.$w.' yec-'.$h.'" width="'.$w.'" height="'.$h.'" src="'.$url.'"></iframe>';
   }
elgg_add_shortcode('iframe', 'embed_any_url');


/*
	Embed Facebook post
	[facebook url="https://www.facebook.com/photo.php?v=338143915678" w="780"]
*/

function embed_fb($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'w' 	=> '100%',
			'url' 	=> 'http://',
		), $atts)
	);
   return '<div class="fb-post" data-href="'.$url.'" data-width="'.$w.'"><div class="fb-xfbml-parse-ignore"></div></div>';
   }
elgg_add_shortcode('facebook', 'embed_fb');


/*
	Embed Tweets
	[twitter url="https://twitter.com/BartStaes/statuses/485064502996500481"]
*/

function embed_tweet($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'url' 	=> 'http://',
		), $atts)
	);
   return '<div class="yec-tweet"><blockquote class="twitter-tweet" lang="en"><p>'.$content.'&nbsp;<a href="'.$shorturl.'">'.$shorturl.'</a></p>&mdash; '.$name.' ('.$id.') <a href="'.$url.'">'.$date.'</a></blockquote></div>';
   }
elgg_add_shortcode('twitter', 'embed_tweet');


/*
	Embed Tweet button - https://about.twitter.com/resources/buttons#tweet
	[tweetbtn url="" text="" via="" size="large" rel="" hash="" counter="false"]
*/

function tweet_btn($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'url' 	=> '',
			'text' 	=> '',
			'via' 	=> '',
			'size' 	=> '',
			'rel' 	=> '',
			'hash' 	=> '',
			'counter' 	=> '',
		), $atts)
	);
   return '<div class="yec-tweetbtn"><a href="https://twitter.com/share" class="twitter-share-button" data-url="'.$url.'" data-text="'.$text.'" data-via="'.$via.'" data-size="'.$size.'" data-related="'.$rel.'" data-hashtags="'.$hash.'">Tweet</a></div>';
   }
elgg_add_shortcode('tweetbtn', 'tweet_btn');


/*
	Embed Twitter button: follow - https://about.twitter.com/resources/buttons#follow
	[twitterfollow via="ECO13_eu" counter="false" size="large" showname="false"]
*/

function twitter_follow($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'via' 	=> '',
			'counter' 	=> '',
			'size' 	=> '',
			'showname' 	=> '',
		), $atts)
	);
   return '<div class="yec-twitterfollow"><a href="https://twitter.com/'.$via.'" class="twitter-follow-button" data-show-count="'.$counter.'" data-show-screen-name="'.$showname.'" data-size="'.$size.'">Follow @'.$via.'</a></div>';
   }
elgg_add_shortcode('twitterfollow', 'twitter_follow');

/*
	Embed Twitter button: hashtag stories - https://about.twitter.com/resources/buttons#hashtag
	[twitterhashbtn hash="ECO13" rel="" size="large" url="" text=""]
*/

function twitter_hashbtn($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'hash' 	=> '',
			'rel' 	=> '',
			'size' 	=> '',
			'url' 	=> '',
			'text' 	=> '',
		), $atts)
	);
   return '<div class="yec-twitterhashbtn"><a href="https://twitter.com/intent/tweet?button_hashtag='.$hash.'&text='.$text.'" class="twitter-hashtag-button" data-size="'.$size.'" data-related="'.$rel.'" data-url="'.$url.'">Tweet #'.$hash.'</a></div>';
   }
elgg_add_shortcode('twitterhashbtn', 'twitter_hashbtn');

/*
	Embed Twitter button: mention https://about.twitter.com/resources/buttons#mention
	[tweetto via="ECO13_eu" rel="ECO13_eu,ecoart13" size="large" text=""]
*/

function tweet_to($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'via' 	=> '',
			'text' 	=> '',
			'size' 	=> '',
			'rel' 	=> '',
		), $atts)
	);
   return '<div class="yec-tweetto"><a href="https://twitter.com/intent/tweet?screen_name='.$via.'&text='.$text.'" class="twitter-mention-button" data-size="'.$size.'" data-related="'.$rel.'">Tweet to @'.$via.'</a></div>';
   }
elgg_add_shortcode('tweetto', 'tweet_to');

/*
	Embed Twitter timeline
	[twittertime list="ECO13_eu" id="479744627549822976"]
*/

function twitter_timeline($atts, $content=null) {
   extract(
		elgg_shortcode_atts(array(
			'list' 	=> '',
			'id' 	=> '',
		), $atts)
	);
   return '<div class="yec-twittertime"><a class="twitter-timeline" href="https://twitter.com/'.$list.'" data-widget-id="'.$id.'">Tweets @'.$list.'</a></div>';
   }
elgg_add_shortcode('twittertime', 'twitter_timeline');


/*********************************************************************
 * DEPRECATED */
function embed_pdf_function($atts) {
   extract(elgg_shortcode_atts(array(
		'url' => 'http://',
		'width' => '640',
		'height' => '480'
   ), $atts));
   return '<iframe src="http://docs.google.com/viewer?url=' . $url . '&embedded=true" style="width:' .$width. '; height:' .$height. ';">Your browser does not support iframes</iframe>';
}
elgg_add_shortcode('embedpdf', 'embed_pdf_function');
