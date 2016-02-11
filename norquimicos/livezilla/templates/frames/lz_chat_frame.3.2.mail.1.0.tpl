<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--html-->
<head>
	<META NAME="robots" CONTENT="noindex,follow">
	<title><!--config_gl_site_name--></title>
	<link rel="stylesheet" type="text/css" href="<!--server-->templates/style_chat.css">
</head>
<body style="margin:0px;" onload="parent.parent.lz_release_ticket_form();">
	<!--alert-->
	<div id="lz_chat_loading"><br><br><br><br><!--lang_client_loading--> ...</div>
	
	<div style="margin:0px;padding:0px;overflow:auto;height:100%;">
		<br><br>
		<form name="lz_login_form" method="post" target="lz_chat_frame.3.2" style="padding:0px;margin:0px;">
		<table align="center" cellpadding="0" cellspacing="0" width="100%" id="lz_form_details" style="display:none;">
			<tr>
				<td align="center" valign="top">	
					<div id="lz_chat_ticket_details">
						<table cellpadding="0" cellspacing="0" class="lz_input_header">
							<tr>
								<td id="lz_input_header_title" class="lz_input_reader"><strong><!--lang_client_ticket_header--></strong></td>
							</tr>
							<tr>
								<td id="lz_form_info_field" class="lz_input_info_field"><!--lang_client_ticket_information--></td>
							</tr>
						</table>
						<!--chat_login_inputs-->
						<table cellpadding="0" cellspacing="0" class="lz_input" style="<!--group_select_visibility-->">
							<tr>
								<td class="lz_form_field"><!--lang_client_group-->:</td>
								<td>&nbsp;&nbsp;&nbsp;</td>
								<td valign="middle">
									<table cellpadding="0" cellspacing="0">
										<tr>
											<td><select id="lz_form_groups" class="lz_form_box" name="intgroup" onChange="parent.parent.lz_ticket_change_group(this);" onKeyUp="this.blur();"><!--groups--></select></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<table cellpadding="3" cellspacing="2" style="display:block;margin-top:15px;width:410px;">
							<tr>
								<td width="140"><div style="display:none;" id="lz_form_mandatory"><table><tr><td style="vertical-align:top;"><div class="lz_required"></div></td><td><span class="lz_index_help_text"><!--lang_client_required_field--></span></td></tr></table></div></td>
								<td><input type="button" onclick="parent.parent.lz_chat_check_ticket_inputs();" id="lz_action_button" class="lz_form_button" value="<!--lang_client_send_message-->"></td>
								<td><div style="display:none;" id="lz_form_mandatory"><table><tr><td style="vertical-align:top;"><span class="lz_index_red">*</span></td><td><span class="lz_index_help_text"><!--lang_client_required_field--></span></td></tr></table></div></td>
							</tr>
						</table>
					</div>
					<div id="lz_chat_ticket_success" style="display:none;"><br><br><br><br><br><br><br><br><b><!--lang_client_message_received--></b>
				</td>
			</tr>
		</table>
		</form>
	</div>
	<div style="position:absolute;left:20px;bottom:10px;<!--ssl_secured-->;z-index:-1;">
		<img src="./images/lz_ssl_secured_chat.gif" alt="" width="123" height="45" border="0">
	</div>
</body>
</html>
