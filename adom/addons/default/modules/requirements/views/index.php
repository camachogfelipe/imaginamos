
{{ streams:form stream="requirements" namespace="requirements" mode="new" exclude="state_requirements" }}

{{ form_open }}

<table>
    {{ fields }}

    <tr class="{{ odd_even }}">
        <td width="250">{{ input_title }}{{ required }} <small>{{ instructions }}</small></td>
        <td>{{ error }}{{ input }}</td>
    </tr>

    {{ /fields }}

</table>

{{ form_submit }}

{{ form_close }}

{{ /streams:form }}
{{ streams:form_assets }}