<input type="hidden" id="lz_form_active_<!--name-->" value="<!--active-->">
<table cellpadding="0" cellspacing="0" id="lz_form_<!--name-->" class="lz_input">
	<tr>
		<td id="lz_form_caption_<!--name-->" class="lz_form_field"><!--caption--></td>
		<td>&nbsp;&nbsp;&nbsp;</td>
		<td>
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td style="width:245px;"><input class="lz_form_check" name="form_<!--name-->" type="checkbox" onchange="return parent.parent.lz_save_input_value('<!--name-->',((this.checked) ? '1' : '0'));"></td>
					<td width="15" align="right"><span class="lz_index_red" id="lz_form_mandatory_<!--name-->" style="display:none;">*</span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>