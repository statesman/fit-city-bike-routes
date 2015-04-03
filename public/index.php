<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Fit City's four favorite bicycle routes near Austin",
    "description" => "Check out four of our favorite local cycling routes and you too can admire mooing roadside cows, blowing fields of bluebonnets and some old-timey beer and burger joints while you roll.",
    "thumbnail" => "http://projects.statesman.com/features/fit-city-bike-routes/assets/share.jpg",
    "shortcut_icon" => "http://media.cmgdigital.com/shared/theme-assets/162015/www.austin360.com_22903be6a1284aafae1b0ed32b32c102.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/162015/www.austin360.com_c6ab4985ce824d618ead4a6c7b87e4e2.png",
    "url" => "http://projects.statesman.com/features/fit-city-bike-routes/",
    "twitter" => "austin360"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>


  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="122" height="50" src="assets/logo_austin360_color.png" />
        <img class="hidden-xs hidden-sm" width="122" height="50" src="assets/logo_austin360_color.png" />
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right social hidden-xs">
        <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
  </div>
</nav>

  <article class="container">
    <div class="row">
      <div class="col-xs-12 header">
        <h1>Fit City's four favorite bicycle routes near Austin</h1>
        <p>Published Monday, April 6, 2015</p>
        <p class="author">By Pam Leblanc, Christian McDonald and Andrew Chavez</p>
      </div>
      <div class="col-xs-12">
        <div class="text-center" id="route-toggle"><a href="#" class="btn btn-primary" role="button">All</a> <a href="#" class="btn btn-primary" role="button">Willow City</a> <a href="#" class="btn btn-primary" role="button">Andice</a> <a href="#" class="btn btn-primary" role="button">Dripping Springs</a> <a href="#" class="btn btn-primary" role="button">Southern Walnut Creek</a></p></div>
      </div>
      <div class="col-md-5 col-xs-12 descriptions">
        <div class="route-description" id="intro" data-name="All">
          <h3>Get on your bike and ride!</h3>
          <p>Holy spinning bicycle tires, have you peeked outside? Now’s the season Central Texas bicyclists dream about nine months out of the year.</p>
          <p>Do yourself a favor and pull your bike out of the shed, pump up its tires, dust off your helmet, squirm into your skin-tight cycling kit and climb aboard. Don’t dawdle, either. It’ll be blistering hot before you know it, and Lycra just isn’t as comfortable when it’s soaked in sweat.</p>
          <p>Check out four of our favorite local cycling routes and you, too, can admire mooing roadside cows, blowing fields of bluebonnets and some old-timey beer and burger joints while you roll.</p>
          <p>Tap the buttons above to see details about each route.</p>
        </div>
        <div class="route-description" id="willow-city" data-name="Willow City" style="display:none">
          <h3>Willow City Loop</h3>
          <p><b>Distance:</b> 13 miles for the loop alone.<br>
              <b>Start:</b> On FM 1323 at Willow City.<br>
              <b>Highlights:</b> Wildflowers, old ranches, hills and camera-packing tourists<br>
              <b>Take a break:</b> Harry’s on the Loop, 2732 FM 1323, 512-919-9130; the Knot in the Loop Saloon, 236 FM 1323, 830-685-3591.<br>
              <b>The details:</b> We discovered this route back when the Pedal Power Wildflower Ride still existed. We’d mount up at the Lyndon B. Johnson State Park and Historic Site and start pedaling a 65-mile circuit. If you just want to focus on the loop, you can start riding near Harry’s, a roadside beer joint in Willow City. From there you’ll head west on FM 1323, fly down Highway 16 in a hair-blowing rush, turn onto the wildflower-studded two-lane farm road and wrap it up with a lung-busting climb back out. Part of the route cuts through private ranchland, so be polite. The route attracts plenty of tourists, in cars and on motorcycles and bicycles, each spring. Expect to see bluebonnets, Indian paintbrush, phlox, winecups and lots of docile cattle along Coal Creek and the surrounding hilltops and canyons. Bring your camera. Afterward, stop at Harry’s or the Knot in the Loop Saloon for a cold beer, burgers and live music. (Please don’t drink and drive — or ride.)</p>
        </div>
        <div class="route-description" id="andice" data-name="Andice" style="display:none">
          <h3>Ride to Andice</h3>
          <p><b>Distance:</b> 69 miles.<br>
          <b>Start:</b> Mason Elementary School, 1501 N. Lakeline Blvd., Leander.<br>
          <b>Highlights:</b> Rolling hills, farmland and fields of grazing horses and cows.<br>
          <b>Take a break:</b> Andice General Store, 6500 FM 970, 254-793-3971.<br>
          <b>The details:</b> Some cyclists will tell you that Andice General Store serves up the best burgers on the planet. That may be a slight exaggeration — everything tastes better when you’ve burned off a million calories pedaling a bike — but they are sloppy good. So’s the atmosphere at this old-timey, wooden-floored general store that sells everything from duct tape to loaves of white bread about 5 miles southwest of Florence. That’s enough reason to turn it into a cycling destination, isn’t it? To make the burgers taste especially terrific, start in Leander. That’ll turn the ride into an odyssey, complete with lush green valleys, the occasional miniature horse and a dash through Liberty Hill.</p>
        </div>
        <div class="route-description" id="dripping-springs" data-name="Dripping Springs" style="display:none">
          <h3>Creek Road in Dripping Springs</h3>
          <p><b>Distance:</b> 17 miles.<br>
          <b>Start:</b> Roger Hanks Park, 195 Roger Hanks Parkway, Dripping Springs.<br>
          <b>Highlights:</b> The creek, the ranches, the cows and the barns.<br>
          <b>Take an (overnight) break:</b> Mt. Gainor Inn, 2390 Prochnow Road, <a href="http://www.mtgainorinn.com" target="_blank">www.mtgainorinn.com</a>.<br>
          <b>The details:</b> It seems like everyone knows about this classic, beginner-friendly route. There’s good reason for that — it’s mostly flat, it snakes along gorgeous Onion Creek well before it slides under Interstate 35 in Austin, and it’s not far from home. From Roger Hanks Park you can either ride until it dead ends at Texas 165 south of Henly, then turn around and ride back, or make an easy loop by hopping on County Road 195 and heading toward Mt. Gainor Road. A few years ago I booked a night at the Mount Gainor Inn, an old-German-farmhouse-turned-bed-and-breakfast on the back half of the ride, then got up the next morning and pedaled to Johnson City and back — about 45 miles of pure heaven. And did I mention the croissant French toast, the hammock, the hummingbirds and the hot tub?</p>
        </div>
        <div class="route-description" id="walnut-creek"  data-name="Southern Walnut Creek" style="display:none">
        <h3>Southern Walnut Creek Trail</h3>
        <p><b>Distance:</b> 20 miles.<br>
        <b>Start:</b> Govalle Park, 5200 Bolm Road.<br>
        <b>Highlights:</b> The lack of motor traffic, the bike-sized bridges and underpasses, the sunflowers — and the occasional reptile.<br>
        <b>Take a break:</b> The free public pool at Govalle Park.<br>
        <b>The details:</b> Like to ride without worrying about dodging motor traffic? Head east, where you’ll find nearly 10 miles of separated-from-the-road pedaling bliss between Govalle Park and Walter E. Long Metropolitan Park. The 7.3-mile paved Southern Walnut Creek Trail dips, curves and weaves along Boggy Creek and Walnut Creek, crossing five bridges and four bike underpasses along the way. Short spurs connect it to the East Communities Branch of the YMCA, the Austin Tennis Center and Davis White Northeast District Park. At its eastern end, near the intersection of Johnny Morris Road and Daffan Lane, the trail flows into the first phase of another new bike path, the Austin to Manor Trail. That adds 2.5 more miles to the route, extending it first along a wide sidewalk and then along an old railroad corridor through Walter E. Long Metropolitan Park. The trail officially ends at Lindell Lane, but planners hope to tack on another 2.5 miles, taking it to Ben Fischer Park in Manor. You won’t encounter any cars, but you might spy a snake, pass a field of sunflowers or encounter a swarm of giant grasshoppers.</p>
        </div>
      </div>
      <div class="col-md-7 col-xs-12">
        <div id="map"></div>
      </div>
    </div>
    <div id="route-images" class="row">
      <div class="route-image col-lg-3 col-sm-6 col-xs-12" data-name="Willow City">
        <h4>Willow City</h4>
        <img class="img-responsive" src="assets/willow-city.jpg">
        <p class="credit pull-right">Sandy Kinsey/FOR AMERICAN-STATESMAN</p>
      </div>
      <div class="route-image col-lg-3 col-sm-6 col-xs-12" data-name="Andice">
        <h4>Andice</h4>
        <img class="img-responsive" src="assets/andice.jpg">
        <p class="credit pull-right">Laura Skelding/AMERICAN-STATESMAN</p>
      </div>
      <div class="route-image col-lg-3 col-sm-6 col-xs-12" data-name="Dripping Springs">
        <h4>Dripping Springs</h4>
        <img class="img-responsive" src="assets/dripping-springs.jpg">
        <p class="credit pull-right">Mark Matson/FOR AMERICAN-STATESMAN</p>
      </div>
      <div class="route-image col-lg-3 col-sm-6 col-xs-12" data-name="Southern Walnut Creek">
        <h4>Southern Walnut Creek</h4>
        <img class="img-responsive" src="assets/walnut-creek.jpg">
        <p class="credit pull-right">Martin do Nascimento/AMERICAN-STATESMAN</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
      <p>Bike Austin advocates for bicycling, offers education programs and hosts a variety of group bike rides, including trips to Andice. Members get bike shop and other retail discounts, plus invitations to special events. Memberships start at $5 per month or $35 per year ($20 for students, $50 per household). For more information, go to <a href="http://austincycling.org">austincycling.org</a>.</p></div>
    </div>
  </article>

  <!-- bottom matter -->
  <?php include "includes/banner-ad.inc";?>
  <?php include "includes/legal.inc";?>
  <?php include "includes/project-metrics.inc"; ?>
  <?php include "includes/metrics.inc"; ?>

  <script src="dist/scripts.js"></script>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>

