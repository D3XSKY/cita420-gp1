<?php $this->layout('types-template', ['title' => 'View']) ?>
<h2>View Type</h2>
<?php $this->insert('types-view-info', ['type' => $type, 'expenses' => $expenses]) ?>
<?php $this->insert('expenses-totals', ['totals' => $totals]) ?>