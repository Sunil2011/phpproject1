&lt;?php
{% set hour = now | date("G") %}
{% if hour >= 9 and hour < 17 %}
    <p>Time for cookies!</p>
{% else %}
    <p>Time to bake more cookies!</p>
{% endif %}

