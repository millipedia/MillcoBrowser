{* TODO for some reason GetHeaderHTML isn't being called in the normal way
so we're just adding the js/css to the template. Take this out when
we get GetHeaderHTML working properly.  *}

<style>
.mb-table {
	display: table;
}

.mb-tr {
	display: table-row;
}

.mb-td {
	display: table-cell;
	vertical-align: middle;
}

.mb-thumb {
	max-width: 120px;
	height:auto;
	padding:8px;
	border:1px solid #ccc;
	margin:10px;
}
</style>

{* /GetHeaderHTML *}

<!-- required js for filebrowser -->
<script src="{$fp_js}"></script>
<script>
	var thumbpath="{$fp_thumburl}";
</script>

<div class="mb-table">
	<div class="mb-tr">
		<div class="mb-td">

					{if $fp_image ne ''}
						<img id="{$fp_image_id}" src="{$fp_image}" alt="" class="mb-thumb">
					{/if}

		</div>
		<div class="mb-td">
				{$fp_input}
				<a class="btn" href="javascript:millco_open_popup('{$fp_url}')">Select</a>
				</div>
			</div>
		</div>
</div>
