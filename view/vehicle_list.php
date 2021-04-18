<?php include('header.php') ?>
<nav>
    <form action="." method="get" id="make_selection">
        <section id="dropmenus" class="dropmenus">
            <?php if ($makes) { ?>
            <label>Make:</label>
            <select name="make_id">
                <option value="0">View All Makes</option>
                <?php foreach ($makes as $make) : ?>
                <?php if ($make['makeID'] == $make_id) { ?>
                <option value="<?= $make['makeID']; ?>" selected>
                    <?php } else { ?>
                <option value="<?= $make['makeID']; ?>">
                    <?php } ?>
                    <?= $make['makeName']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?php } ?>


            <?php if ($types) { ?>
            <label>Types:</label>
            <select name="type_id">
                <option value="0">View All Types</option>
                <?php foreach ($types as $type) : ?>
                <?php if ($type['typeID'] == $type_id) { ?>
                <option value="<?= $type['typeID']; ?>" selected>
                    <?php } else { ?>
                <option value="<?= $type['typeID']; ?>">
                    <?php } ?>
                    <?= $type['typeName']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?php } ?>

            <?php if ($classes) { ?>
            <label>Class:</label>
            <select name="class_id">
                <option value="0">View All Classes</option>
                <?php foreach ($classes as $class) : ?>
                <?php if ($class['classID'] == $class_id) { ?>
                <option value="<?= $class['classID']; ?>" selected>
                    <?php } else { ?>
                <option value="<?= $class['classID']; ?>">
                    <?php } ?>
                    <?= $class['className']; ?>
                </option>
                <?php endforeach; ?>
            </select>
            <?php } ?>
        </section>
        <section id="sortBy" class="sortBy">
            <div>
                <span>Sort by: </span>
                <input type="radio" id="sortByPrice" name="sort" value="price" 
                    <?php if ($sort === 'price') echo 'checked' ?>>
                <label for="sortByPrice">Price</label>
                <input type="radio" id="sortByYear" name="sort" value="year" 
                    <?php if ($sort === 'year') echo 'checked' ?>>
                <label for="sortByYear">Year</label>
                <input type="submit" value="Submit" class="button blue button-slim">
            </div>
        </section>
    </form>
</nav>
<section>
    <?php if($vehicles) { ?>
    <div id="table-overflow-customer" class="table-overflow-customer">
        <table>
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicles as $vehicle) : ?>
                <tr>
                    <td><?= $vehicle['year']; ?></td>
                    <?php if ($vehicle['makeName']) { ?>
                    <td><?= $vehicle['makeName']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <td><?= $vehicle['model']; ?></td>
                    <?php if ($vehicle['typeName']) { ?>
                    <td><?= $vehicle['typeName']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <?php if ($vehicle['className']) { ?>
                    <td><?= $vehicle['className']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <td><?= "$".number_format($vehicle['price'], 2); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php } else { ?>
    <p>
        There are no matching vehicles in Zippy&apos;s inventory.
    </p>
    <?php } ?>
</section>
<?php include('footer.php') ?>