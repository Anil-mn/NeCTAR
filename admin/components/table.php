<?php

function Table($name)
{
      echo '<div class="col-lg-6 grid-margin stretch-card">
       <div class="card">
      <div class="card-body">
        <h4 class="card-title">'.$name.'</h4>
        <p class="card-description">
          Add class <code></code>
        </p>
        <table class="table table-bordered">
           <thead>
          <tr>';

} 

Function tableHead($head1){
    echo ' <th>'.$head1.' </th>';
}

function TabelEnd()
{
    echo ' </tbody>
        </table>
      </div>
    </div>
    </div>
    </tr>';
}

?>