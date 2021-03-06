<?php

    //print_r($loginuserdata);die;
    $controller = strtolower($this->request->params['controller']); 
    $action = strtolower($this->request->params['action']);  
    if($controller == 'users' && ($action == 'index')) {
        $dashboard_cls  = 'active';    
    }else{
        $dashboard_cls  = '';
    }

   
    if($controller == 'users' && ($action == 'add' || $action ==  'view' || $action == 'index')) {
        $user_cls  = 'active';
    }else{
        $user_cls  = '';
    }

    if($controller == 'roles' && ($action == 'add' || $action ==  'view' || $action == 'index' || $action == 'assignpermissions')) {
        $role_cls  = 'active';
    }else{
        $role_cls  = '';
    }

    if($controller == 'permissions' && ($action == 'add' || $action ==  'view' || $action == 'index')) {
        $permission_cls  = 'active';
    }else{
        $permission_cls  = '';
    }

    if($controller == 'articles' && ($action == 'add' || $action ==  'view' || $action == 'index')) {
        $page_cls  = 'active';
    }else{
        $page_cls  = '';
    }

    if($controller == 'emailtemplates' && ($action == 'add' || $action ==  'view' || $action == 'index')) {
        $template_cls  = 'active';
    }else{
        $template_cls  = '';
    }


?>  
<li class="<?php echo $dashboard_cls; ?>">   
    <a href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'dashboard']); ?>">
        <i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span>
    </a>
</li>

<li class = "<?php echo $user_cls; ?>">
    <a href="javascript:void(0)"><i class="fa fa-user"></i><span class="nav-label">Manage Users</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li class="<?php echo ($controller == 'users' && $action == 'index' || $action == 'view')?'active' :'' ?>" >
            <?php echo $this->Html->Link('Users List',array('controller' =>'users','action'=> 'index'),array('escape'=>false)); ?>                         
        </li>
         <li class="<?php echo ($controller == 'users' && $action == 'add')?'active' :'' ?>">
            <?php echo $this->Html->Link('Add User',array('controller' =>'users','action'=> 'add'),array('escape'=>false)); ?>                    
        </li >
    </ul>
</li>

<li class = "<?php echo $role_cls; ?>">
    <a href="javascript:void(0)"><i class="fa fa-sitemap"></i><span class="nav-label">Manage Roles</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li class="<?php echo ($controller == 'roles' && $action == 'index' || $action == 'view' || $action == 'assignpermissions')?'active' :'' ?>" >
            <?php echo $this->Html->Link('User Roles',array('controller' =>'roles','action'=> 'index'),array('escape'=>false)); ?>                         
        </li>
         <li class="<?php echo ($controller == 'roles' && $action == 'add')?'active' :'' ?>">
            <?php echo $this->Html->Link('Add Role',array('controller' =>'roles','action'=> 'add'),array('escape'=>false)); ?>                    
        </li >
    </ul>
</li>

<li class = "<?php echo $permission_cls; ?>">
    <a href="javascript:void(0)"><i class="fa fa-sitemap"></i><span class="nav-label">Manage Permissions</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li class="<?php echo ($controller == 'permissions' && $action == 'index' || $action == 'view')?'active' :'' ?>" >
            <?php echo $this->Html->Link('User Permissions',array('controller' =>'permissions','action'=> 'index'),array('escape'=>false)); ?>                         
        </li>
         <li class="<?php echo ($controller == 'permissions' && $action == 'add')?'active' :'' ?>">
            <?php echo $this->Html->Link('Add Permission',array('controller' =>'permissions','action'=> 'add'),array('escape'=>false)); ?>                    
        </li >
    </ul>
</li>

<li class = "<?php echo $page_cls; ?>">
    <a href="javascript:void(0)"><i class="fa fa-files-o"></i><span class="nav-label">Manage Pages</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li class="<?php echo ($controller == 'articles' && $action == 'index' || $action == 'view')?'active' :'' ?>" >
            <?php echo $this->Html->Link('Pages List',array('controller' =>'articles','action'=> 'index'),array('escape'=>false)); ?>                         
        </li>
         <li class="<?php echo ($controller == 'articles' && $action == 'add')?'active' :'' ?>">
            <?php echo $this->Html->Link('Add Page',array('controller' =>'articles','action'=> 'add'),array('escape'=>false)); ?>                    
        </li >
    </ul>
</li>

<li class = "<?php echo $template_cls; ?>">
    <a href="javascript:void(0)"><i class="fa fa-desktop"></i><span class="nav-label">Email Templates</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level collapse">
        <li class="<?php echo ($controller == 'emailTemplates' && $action == 'index' || $action == 'view')?'active' :'' ?>" >
            <?php echo $this->Html->Link('Templates List',array('controller' =>'emailTemplates','action'=> 'index'),array('escape'=>false)); ?>                         
        </li>
    </ul>
</li>