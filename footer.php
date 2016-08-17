<div id="sitemap">
	<ul>
		<li><a href="#">Purchase Status</a></li>
		<li><a href="#">Your Account</a></li>
		<li><a href="#">Careers</a></li>
	</ul>
	<br>
	<ul>
		<li><a href="#">Return Policy</a></li>
		<li><a href="#">Shipping Info</a></li>
		<li><a href="#">FAQ</a></li>
	</ul>
</div>
<div id="copy">
<p>&copy; 2016 Diane Selvy Productions - All Rights Reserved.</p>

</div>

<script>
/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
</script>