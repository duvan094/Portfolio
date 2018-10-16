<?php echo "<script type='text/javascript'>var ajaxurl = '".admin_url('admin-ajax.php')."'</script>"; ?>

<?php
  echo '<ul id="postgrid">';
  include 'post-grid-parts.php';
  echo '</ul>';
?>

<div id="spinner-container" class="loadingFinished">
  <div class="spinner center"></div>
</div>

<?php
  echo '<button id="loadMore" class="button" onclick="loadPosts()">Load More</button>';
?>

<script type="text/javascript">
  var postgrid = document.getElementById("postgrid");
  var spinnerHeight = postgrid.children[0].offsetWidth;
  var spinner = document.getElementById("spinner-container");
  spinner.style.height = spinnerHeight + "px";


  window.onresize = function(){
    spinnerHeight = postgrid.children[0].offsetWidth;
    spinner.style.height = spinnerHeight + "px";
  }

  var pageNumber = 0;

  function loadPosts(){
    spinner.classList.remove("loadingFinished");
    spinner.classList.add("loading");

    pageNumber += 6;
    var xmlhttp;
    xmlhttp=new XMLHttpRequest();

    xmlhttp.onreadystatechange=function(){
      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        if(xmlhttp.responseText == ""){
          document.getElementById("loadMore").parentNode.removeChild(document.getElementById("loadMore"));
        }else{
          postgrid.innerHTML += xmlhttp.responseText;
        }
        spinner.classList.add("loadingFinished");
        spinner.classList.remove("loading");
      }
    }

    xmlhttp.open("POST",ajaxurl + "?action=loadPosts",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("pageNumber=" + encodeURIComponent(pageNumber));
  }


</script>
