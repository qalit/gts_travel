<script type="text/javascript">
    function loadUrl(url){
        $("main").load(url);
        
    }
    $(function () {
        $("accordion").accordion({
            autoHeight: False,
            navigation: True
        })
      
    })
</script>
<form class="quick_search">
    <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=”};this._haschanged=true;">
</form>
<hr/>
<h3>Admin</h3>
<ul class="toggle">
    <li class="icn_settings"><a href="#">Options</a></li>
    <li class="icn_security"><a href="#">Security</a></li>
    <li class="icn_jump_back"><a href="#">Logout</a></li>
    </ul>
    <footer>
        <hr />
        <p><strong>Copyleft&copy; 2013 GTS</strong></p>
        </footer>