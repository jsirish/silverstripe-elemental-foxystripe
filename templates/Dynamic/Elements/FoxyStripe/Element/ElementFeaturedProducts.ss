<% if $Title && $ShowTitle %><h2 class="element__title">$Title</h2><% end_if %>

<% if $Products %>
	<% loop $Products %>
		<h3>$Title</h3>
	<% end_loop %>
<% end_if %>