{{ if evaluations }}
    {{ evaluations }}
        {{ if status == 'open' }}
        <div class="evaluations clearfix">
            <h3>
                {{ if not was_completed }}
                    <a href="{{ url }}">{{ name }}</a>
                {{ else }}
                    {{ name }}
                {{ endif }}
            </h3>
            <p>{{ description }}</p>
            {{ if was_completed }}
               <small class="evaluations-completed">Ya completó está evaluación</small>
            {{ endif }}
        </div>
        {{ endif }}
    {{ /evaluations }}
{{ else }}
    No
{{ endif }}