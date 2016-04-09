<style type="text/css">
  ul {list-style: none;padding: 0px;margin: 0px;}
  ul li {display: block;position: relative;float: left;}
  li ul {display: none;}
  ul li a {display: block;background: #000;padding: 5px 10px 5px 10px;text-decoration: none;
           white-space: nowrap;color: #fff;}
  ul li a:hover {background: #f00;}
  li:hover ul {display: block; position: absolute;}
  li:hover li {float: none;}
  li:hover a {background: #f00;}
  li:hover li a:hover {background: #000;}
  #drop-nav li ul li {border-top: 0px;}
</style>


<ul id="drop-nav">
  <li><a href="#">Support</a></li>
  <li><a href="#">Web Design</a>
    <ul>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </li>  
</ul>