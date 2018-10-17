        <a id='events'></a>
        <article class='bg-aureolineyellow'>
            <div class="pa4">
                <h2 class="f3">Events</h2>
                <table class="fw6 w-100 center" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="tl bb">Date</th>
                            <th class="tl bb">Event</th>
                            <th class="tl bb">Location</th>
                        </tr>
                    </thead>
                    <tbody class="lh-copy fw3">
<?php foreach ($events as $event): ?>
    <tr>
        <td class="pv3"><?php echo date_format(date_create($event['date']), 'j M Y'); ?></td>
        <td class="pv3"><?php echo $event['name']; ?></td>
        <td class="pv3"><?php echo $event['location']; ?></td>
    </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </article>
