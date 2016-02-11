<div class="one-full">
    <section class="title">
        <h4><?php echo lang('evaluations:results_list'); ?></h4>
    </section>

    <section class="item">

        <div class="content">
            <?php if (!empty($items)): ?>

                <table>
                    <thead>
                        <tr>
                            <th>Quién respondió</th>
                            <th>Evaluación</th>
                            <th>Cuando respondió</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                <div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?php echo anchor('users/' . $item->user->username, $item->user->first_name . ' ' . $item->user->last_name); ?></td>
                                <td><?php echo anchor('admin/evaluations/edit/' . $item->evaluations->id, $item->evaluations->name); ?></td>
                                <td><?php echo $item->replied_on ?></td>
                                <td class="actions">
                                    <?php echo anchor('admin/evaluations/results/show/' . $item->id, lang('evaluations:buttons:show_results'), 'class="button modal"') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php else: ?>
                <div class="no_data"><?php echo lang('evaluations:no_results'); ?></div>
            <?php endif; ?>

        </div>

    </section>
</div>