<style>
    .searchform {
        float: left;
        margin-top: 20px;
        margin-left: 50px;
        border:#00afdd 2px solid;
        height:27px;
        width:350px;
    }
    .searchform input[type=text]
    {
        width:270px;
        height:21px;
        border:0px;
        background:#ffffff;
        float:left;
        margin:0px;padding:3px;
    }
    .searchform input[type=submit]
  {
        border:#00afdd 2px solid;
        float:right;
        margin:2px 2px 2px 2px;
        height:23px;
        padding-top:1px;
        background:#4fbfdc;
    }
</style>
<div id="search">
    <form class="searchform" action="" method="get">
        <input class="s" onfocus="if (this.value == 'Search this website …') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this website …';}" type="text" name="s" value="Search this website …" />
        <input class="searchsubmit" type="submit" value="Search" />
    </form>
</div>
