<div class="call-popup pb-2 pl-1 pr-1">
    <div class="call-form">
    
        <form action="/callform" method="POST" id="callform" class="flex flex-sb s-flex-wrap">
            <select name="slot" id="slots" class="" size="">
                <option value="" disabled selected>Vælg tidsrum</option>
                <?php 
                 $slots = $site->phonetimes()->toStructure()->sortBy('day', 'asc');
                foreach ($slots as $slot): ?>
                    <?php if($slot->day()->toDate() < time()): ?>
                <option value="<?= $slot->day() ?> <?= $slot->time() ?>" disabled><?= $slot->day()->toDate('%A d. %e. %B') ?> kl. <?= $slot->from() ?> – <?= $slot->to() ?></option>
                    <?php else: ?>
                        <?php if($slot->toggle()->toBool() === true): ?>
                <option value="<?= $slot->day() ?> <?= $slot->time() ?>" disabled>
                    <?= $slot->day()->toDate('%A d. %e. %B') ?> kl. <?= $slot->from() ?> – <?= $slot->to() ?> (Optaget)</option>
                    <?php else: ?>
                        <option value="<?= $slot->day() ?> <?= $slot->time() ?>">
                    <?= $slot->day()->toDate('%A d. %e. %B') ?> kl. <?= $slot->from() ?> – <?= $slot->to() ?></option>
                <?php endif ?>
                <?php endif ?>
                <?php endforeach ?>
            </select>
            <?php echo csrf_field(); ?>
            <?php echo honeypot_field(); ?>

            <input type="hidden" name="formid" value="callform">
            <input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Telefonnummer" class="ml-1 mr-1" id="phonenumber" name="phonenumber" value="" required> 
            <label for="submit" class="">
                <button type="submit" name="_submit" value="<?php echo $callform->token() ?>" class="btn bg-lgreen ta-c mono small pl-1 pr-1 c-black">Send</button>
            </label>

            <input type="submit" class="hide-input" id="submit" name="submit" value="Send">
        </form>
    </div>
</div>