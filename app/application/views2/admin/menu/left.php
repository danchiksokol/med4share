
	<ol class='serialization vertical example'>

		<li data-id='1' data-name='Item 2'>
			Раздел 1
		</li>
		<li data-id='2' data-name='Item 3'>
			Раздел 2<ol>
				<li style="border: 0"></li>
			</ol>
		</li>
		<li data-id='3' data-name='Item 4'>
			Раздел 3
			<ol>
				<li data-id='3-0' data-name='Item 3.1'>Раздел 3.1</li>
				<li data-id='3-1' data-name='Item 3.2'>Раздел 3.2</li>
				<li data-id='3-2' data-name='Item 3.3'>Раздел 3.3</li>
				<li data-id='3-3' data-name='Item 3.4'>Раздел 3.4</li>
				<li data-id='3-4' data-name='Item 3.5'>Раздел 3.5</li>
				<li data-id='3-5' data-name='Item 3.6'>Раздел 3.6</li>
			</ol>
		</li>
		<li data-id='4' data-name='Item 5'>
			Раздел 4
		</li>
		<li data-id='5' data-name='Item 6'>
			Раздел 5
		</li>
	</ol>

<!--<pre id="serialize_output2" ></pre>-->

<script>
	$(function  () {
		var group = $("ol.serialization").sortable({
			group: 'serialization',
			//delay: 500,
			onDrop: function (item, container, _super) {
				var data = group.sortable("serialize").get();

				var jsonString = JSON.stringify(data, null, ' ');

				$.ajax({
					url: '/admin/menu/sort',
					dataType: 'json',
					type: 'POST',
					data: {'post_data': jsonString },
					beforeSend: function ( xhr ) {},
					success: function( data )
					{
						if(data.status == true)
						{




						}
						else if(data.status == false)
						{

						}
					},
					error: function( error )
					{
						//Вывод ошибки
					}
				});

				//$('#serialize_output2').text(jsonString);
				_super(item, container)
			}
		})
	})
</script>


<style>
	/* line 1, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	body.dragging, body.dragging * {
		cursor: move !important; }

	/* line 4, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	.dragged {
		position: absolute;
		top: 0;
		opacity: 0.5;
		z-index: 2000; }

	/* line 10, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	ol.vertical {
		margin: 0 0 9px 0;
		min-height: 10px; }
	/* line 13, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	ol.vertical li {
		display: block;
		margin: 5px;
		padding: 5px;
		border: 1px solid #cccccc;
		color: #0088cc;
		background: #eeeeee; }
	/* line 20, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	ol.vertical li.placeholder {
		position: relative;
		margin: 0;
		padding: 0;
		border: none; }
	/* line 25, /Users/jonasvonandrian/jquery-sortable/source/css/jquery-sortable.css.sass */
	ol.vertical li.placeholder:before {
		position: absolute;
		content: "";
		width: 0;
		height: 0;
		margin-top: -5px;
		left: -5px;
		top: -4px;
		border: 5px solid transparent;
		border-left-color: red;
		border-right: none; }

	/* line 32, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol {
		list-style-type: none; }
	/* line 34, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol i.icon-move {
		cursor: pointer; }
	/* line 36, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol li.highlight {
		background: #333333;
		color: #999999; }
	/* line 39, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol li.highlight i.icon-move {
		background-image: url("../img/glyphicons-halflings-white.png"); }

	/* line 42, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol.nested_with_switch, ol.nested_with_switch ol {
		border: 1px solid #eeeeee; }
	/* line 44, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol.nested_with_switch.active, ol.nested_with_switch ol.active {
		border: 1px solid #333333; }

	/* line 48, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol.nested_with_switch li, ol.simple_with_animation li, ol.serialization li, ol.default li {
		cursor: pointer; }

	/* line 51, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	ol.simple_with_animation {
		border: 1px solid #999999; }

	/* line 54, /Users/jonasvonandrian/jquery-sortable/source/css/application.css.sass */
	.switch-container {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 80px; }
</style>