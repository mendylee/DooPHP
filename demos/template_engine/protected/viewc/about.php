<?xml version="1.0" encoding="utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <?php include "header.php"; ?>
    </head>
	<body>
      <?php include "nav.php"; ?>
	  <div class="content">
	  	<h1>Welcome to Template Engine Demo</h1>
		<p class="normal">Here you can learn about how to do the view part in MVC with DooPHP using its template engine.</p>
		<p class="normal">IF statement is not supported in the template as Logics should be done in the Controller. The View part should only display/list out data. You should use variable names to include template files in this case where the logic is handled in Controller</p>
        <p class="normal">View the <a class="file" href="<?php echo $data['baseurl']; ?>index.php/template.html">template source</a> (html).</p>
		<p class="boldy"><a name="template" id="template"></a>Test drive Template Engine</p>

<hr/>
    <?php include "{$data['file']}.php"; ?>

    <?php include "nested/hi.php"; ?>
<hr/>
    <p>View test, variable, tags, loop, loop assoc array, double loop:</p>

    Username: <?php echo $data['username']; ?> <br/>

    Username upper case: <?php echo upper($data['username']); ?>

    <hr/>

    <p>Using a function in <em>template_tags.php</em> to print_r. You control what you want to be available in the template.
    <?php echo DeBuG($data['messages']); ?></p>

    <hr/>
    <h2>Messages list:</h2>
    <p>Just a simple loop</p>
    <ol>
    <?php foreach($data['messages'] as $k1=>$v1): ?>
        <li><?php echo $v1; ?></li>
    <?php endforeach; ?>
    </ol>

    <hr/>
    <h2>User name list:</h2>
    <p>Functions can be used in loop</p>
    <ol>
    <?php foreach($data['user'] as $k1=>$v1): ?>
        <li><?php echo upper($k1); ?> : <?php echo upper($v1); ?></li>
    <?php endforeach; ?>
    </ol>

    <hr/>
    <h2>Full name for user <b>john</b>:</h2>
    <?php echo $data['user']['john']; ?>

    <hr/>
    <h2>Full name for user <b>john</b> UPPER case:</h2>
    <?php echo upper($data['user']['john']); ?>

    <hr/>
    <h2>Total user:</h2>
    <p>Associative array usage</p>
    Male = <?php echo tofloat($data['member']['total']['male']); ?> <br/>
    Female = <?php echo $data['member']['total']['female']; ?><br/>
    Female = <?php echo sample_with_args($data['member']['total']['female'], 'we female'); ?><br/>
    Female = <?php echo TRIPLE($data['member']['total']['female'], ' x3 female + ', 1000); ?><br/>
    <br/>
    Kids Male = <?php echo $data['member']['totalKids']['male']; ?> <br/>
    Kids Female = <?php echo $data['member']['totalKids']['female']; ?> <br/>
    <br/>
    Teen Male = <?php echo $data['member']['totalTeen']['male']; ?> <br/>
    Teen Female = <?php echo $data['member']['totalTeen']['female']; ?> <br/>

    <hr/>
    <h2>User's messages list:</h2>
    <p>Nested loop example</p>
    <ul>
    <?php foreach($data['usermsg'] as $k1=>$v1): ?>
        <strong><?php echo $k1; ?> :</strong> <br/>
        <?php foreach($v1 as $k2=>$v2): ?>
            <li>(<?php echo $k2; ?>)  <?php echo $v2; ?></li>
            <!-- or you can use <li>({usermsg' v' k})  {usermsg' v' v}</li> -->
            <!-- or <li>({loop' v' k})  {{loop' v' v}</li> -->
            <!-- or even <li>({l' v' k})  {{l' v' v}</li> -->
        <?php endforeach; ?>
        <br/>
    <?php endforeach; ?>
    </ul>

    <hr/>
    <h2>Messages with detail:</h2>
    <p>Nested loop with Assoc array example</p>
    <ol>
    <?php foreach($data['msgdetails'] as $k1=>$v1): ?>
        <li><?php echo upper($v1['subject']); ?> <b>ATTACH: </b> <?php echo $v1['attachment']['pdf']; ?></li>
    <?php endforeach; ?>
    </ol> 

    <hr/>
    <h2>The Winner is:</h2>
    <p>Using objects</p>
    Winner name: <?php echo $data['winner']->fullname; ?>  <br/>
    Gender: <?php echo $data['winner']->gender; ?>  <br/>
    <br/><strong>Winner's Physical Profile:</strong><br/>
    Weight: <?php echo $data['winner']->Physical->weight; ?>  <br/>
    Height: <?php echo $data['winner']->Physical->height; ?>  <br/>

    <hr/>
    <h2>Winners list:</h2>
    <p>Using objects in loop</p>
    <ul>
    <?php foreach($data['winners'] as $k1=>$v1): ?>
        <li><?php echo upper($v1->fullname); ?>
        <br/>Gender: <?php echo $v1->gender; ?>
        <br/>Weight: <?php echo $v1->Physical->weight; ?>
        <br/>Height: <?php echo $v1->Physical->height; ?>
        </li>
        <br/><br/>
    <?php endforeach; ?>
    </ul>
    <p>winners' value,  loop' value, loop' v, l' v, somename' v are the same</p>
       <span class="totop"><a href="#top">BACK TO TOP</a></span>
	  </div>
	</body>
</html>