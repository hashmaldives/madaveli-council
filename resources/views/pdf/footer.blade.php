<footer dir="ltr">
    <div class="line-container">
        <div class="line"></div>
    </div>
    <div class="container">
        <div style="width: 80%; float: left;">
            <p style="font-size: 10px;">Printed on: {{$today_date}} by: {{ $user->name }}   |   Tel: {{ nova_get_setting('org_phone') ?? '4002005' }}   -   Email: {{ nova_get_setting('org_email') ?? 'info@hash.mv' }}</p>
        </div>
        <div style="width: 19%; float: right;">
            <div class="pagination">
                <p style="font-size: 10px; text-align: right;">Page {PAGENO} of {nb}</p>
            </div>
        </div>
    </div>
</footer>