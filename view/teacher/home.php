
<?php include('view/layout/header.php'); ?>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/index.php?r=teacher/home">
              <span data-feather="file"></span>
              班级管理
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/index.php?r=teacher/add_course">
              <span data-feather="file"></span>
              新增班级
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
      <h2>班级列表</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>课号</th>
              <th>名称</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($courses as $value): ?>
            <tr>
              <td><?php echo $value['id'];?></td>
              <td><?php echo $value['subject_no'];?></td>
              <td><?php echo $value['subject'];?></td>
              <td><a href="/index.php?r=assignment/home&course_id=<?php echo $value['id'];?>">作业管理</a></td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include('view/layout/footer.php');