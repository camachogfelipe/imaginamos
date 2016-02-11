{{englishs}}
<div class="content_940 content_home">
    <div class="linea_home">
        <h1 class="title_dest bold">English</h1>
    </div>
    <img src="{{url:site}}files/large/{{images_english:filename}}" class="img_donde" width="940" height="400"/><br>
    <div class="clearfix">
        <div class="texto_eng left" style="width:730px;">
            <div class="main_p">{{description_english}}</div>
        </div>
        <div class="right content_img_eng">
            <img src="{{url:site}}files/large/{{images_lateral1_english:filename}}" width="175" height="175"/>
            <img src="{{url:site}}files/large/{{images_lateral2_english:filename}}" width="175" height="175"/>
        </div>
    </div>
    <h2 class="title2">Contact Us</h2>
    <div class="main_p">
        {{textocontact_english}}
    </div>
    <form class="form_contacto" id='validation-en' action="{{url:site}}english/comment" method="post">
        <div class="clearfix">
            <input name='name' type="text" class="input1 left" data-validation-engine="validate[required]" data-errormessage-value-missing="* Field required" placeholder="Name" />            
            <input name='company' type="text" class="input1 right" data-validation-engine="validate[required]" data-errormessage-value-missing="* Field required" placeholder="Company name" />            
            <input name='email' type="text" class="input1  left" data-validation-engine="validate[required, custom[email]]" data-errormessage-value-missing="* Field required" data-errormessage-custom-error="* No valid E-mail" placeholder="E-mail" />
            <input name='cel' type="text" class="input1 right" data-validation-engine="validate[required, custom[phone]]" data-errormessage-value-missing="* Field required" data-errormessage-custom-error="* No valid phone number" placeholder="Cell phone" />            
        </div>
        <textarea name='comment'  class="textarea2" placeholder="Comment"></textarea>
        <input type="submit" class="submit" value="Send" /></form>
</form>
</div>
{{/englishs}}