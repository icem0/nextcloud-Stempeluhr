<div id="app">
    <h1>Stempeluhr</h1>
    <p>Hier kannst du deine Zeit stempeln!</p>

    <form action="/apps/stempeluhr/stempel" method="post">
        <?php script('core', 'csrf'); ?>
        <button type="submit">Stempeln</button>
    </form>
</div>
