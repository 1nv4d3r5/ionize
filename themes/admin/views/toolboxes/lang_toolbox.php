
<div class="divider">
	<a class="button light" id="newLangToolbarButton">
		<i class="icon-plus"></i><?= lang('ionize_label_new_lang') ?>
	</a>
</div>

<script type="text/javascript">

	/**
	 * New lang button
	 *
	 */
	$('newLangToolbarButton').addEvent('click', function(e)
	{
		ION.formWindow(
			'lang',
			'langForm',
			Lang.get('ionize_label_new_lang'),
			'lang/get_form',
			{
				width:350,
				height:130
			}
		);
	});


	/**
	 * Save with CTRL+s
	 *
	 */
	// ION.addFormSaveEvent('existingLangFormSubmit');

</script>
