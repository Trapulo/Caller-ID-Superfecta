<div class="panel panel-info">
  <div class="panel-heading">
    <div class="panel-title">
      <a href="#" data-toggle="collapse" data-target="#moreinfo"><i class="glyphicon glyphicon-info-sign"></i></a>&nbsp;&nbsp;&nbsp;<?php echo _('What is CallerID Superfecta?')?></div>
  </div>
  <!--At some point we can probably kill this... Maybe make is a 1 time panel that may be dismissed-->
  <div class="panel-body collapse" id="moreinfo">
    <?php echo _('CallerID Superfecta for FreePBX is a utility program which adds incoming CallerID name lookups to your Asterisk system using multiple data sources')?>
  </div>
</div>
<table data-toggle="table" data-sort-name="stargazers_count" data-sort-order="desc">
  <thead>
    <tr>
      <th data-field="name" data-sortable="true"><?php echo _('Name')?></th>
      <th data-field="actions"><?php echo _('Actions')?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($schemes as $scheme) {?>
      <tr class="scheme" id="<?php echo $scheme['name']?>" data-name="<?php echo $scheme['name']?>">
        <td>
          <a href="https://github.com/wenzhixin/bootstrap-table"><?php echo $scheme['name']?></a>
        </td>
        <td class="scheme-actions">
          <i class="fa fa-toggle-<?php echo $scheme['powered'] ? 'on' : 'off'?>" data-type="power"></i>
    			<i class="fa fa-arrow-down <?php echo ($scheme['showdown']) ? '' : 'hidden'?>" data-type="down"></i>
    			<i class="fa fa-arrow-up <?php echo ($scheme['showup']) ? '' : 'hidden'?>" data-type="up"></i>
    			<i class="fa fa-files-o" data-type="duplicate"></i>
    			<i class="fa fa-trash-o" data-type="delete"></i>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>