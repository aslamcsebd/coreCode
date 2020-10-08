-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2020 at 08:56 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userType` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userId`, `password`, `userType`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'aslamctg', 'aslamctg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `code_type`
--

CREATE TABLE `code_type` (
  `id` int(50) NOT NULL,
  `code_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code_type`
--

INSERT INTO `code_type` (`id`, `code_name`) VALUES
(66, 'laravel'),
(50, 'Linux'),
(4, 'js'),
(5, 'php'),
(6, 'laravel'),
(7, 'mysql'),
(9, 'github'),
(10, 'editor'),
(106, 'laravel'),
(105, 'php'),
(104, 'js'),
(102, 'laravel'),
(103, 'Linux'),
(109, 'editor'),
(108, 'github'),
(107, 'mysql');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `item`, `code`) VALUES
(1, 'sublime auto save & tab size', 'code auto save\r\nif i want to save all last edit code automatically\r\n\r\nGo> preferences > setting > \r\nRight side window [user]\r\n{\r\n   \"save_on_focus_lost\":true,\r\n\r\n   \"tab_size\": 3,\r\n   \"translate_tabs_to_spaces\": true,\r\n   \"detect_indentation\": false\r\n} \r\nsave & close window...'),
(2, 'sublime', 'Sublime not showing folder structure\r\n\r\n***\r\nview > side bar > show side bar'),
(3, 'sublime License', 'YouTube link\r\nIt is working well...\r\n\r\n****\r\nwww.youtube.com/watch?v=csjG0xoDMcE\r\nor\r\nwww.youtube.com/watch?v=yNsRvBybMIA'),
(4, 'sublime [enter]', 'How to input new line character in Find and Replace field\r\n\r\nsolution:\r\nCtrl+enter, [replace place]\r\nor you can turn on regex mode and enter a \n'),
(5, 'Sublime: Laravel Blade Highlighter', 'link: https://www.youtube.com/watch?v=FeuZtBdS20c\r\n\r\nPreference/package controller\r\nor...\r\nsublime/tools/command palette.. Enter\r\ntype: package controle: install package  Enter\r\ntype : Laravel Blade Highlighter Enter\r\nother package: Laravel Blade Autoâ€‹Complete\r\n\r\nSee below bar installing then right-below select Laravel Blade\r\n\r\nUnstall package?\r\nSame way but type package controle: Remove package  Enter\r\nthen see install package list and unstall.\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `github`
--

CREATE TABLE `github` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `github`
--

INSERT INTO `github` (`id`, `item`, `code`) VALUES
(2, 'git', '1st create a folder for git on pc\r\nBasic configration...\r\n\r\n$ git init	create .git file \r\n$ git --version\r\n$ git config --global user.name \"Aslam\"\r\n$ git config --global user.email \"aslam@gmail.com\"\r\n$ git config --list\r\nclear\r\n\r\nEach of every project user & email\r\n$ git config user.name \"aslam\"\r\n$ git config user.email \"aslam@gmail.com\"\r\n\r\n\r\nupload file...\r\n$ git status\r\n$ git add file.txt	[save this file]\r\n$ git add --all	 or\r\n$ git add .\r\n$ git commit -m \"message\"\r\n$ git remote add origin https...\r\n$ git push -u origin master \r\n\r\ndownload file...\r\ngit status\r\ngit log\r\nfirst create a folder...\r\ngit clone https link...\r\n\r\nupdate.....\r\ngit status\r\ngit add .\r\ngit commit -m \"message\"\r\ngit log\r\ngit pull	\r\ngit push	[upload to master branch]\r\n\r\nlog 	[list of commit]\r\n$ git log\r\n$ git log --oneline\r\n\r\ndownload from branch\r\ncreate a branch first in git hub...\r\n\r\ngit clone https link...  -b branchName\r\nbranchName= about, help, contact etc'),
(3, 'git', 'switch go any repository or branch\r\ngit checkout  a1b2c3\r\n\r\nHow to switch back to \'master\' with git?\r\n\r\ngit stash or git commit -m \"abcd\"\r\ngit checkout master\r\ngit branch -D merchantApi\r\n\r\nNote: Above steps will delete the branch locally.\r\n\r\nFor deleting the branch you have to stash\r\n the changes made on the branch \r\nor you need to commit the changes\r\n you made on the branch. \r\nFollow the below steps if you made\r\n any changes in the current branch.');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`id`, `item`, `code`) VALUES
(10, 'image', '<img src=\"admin_image/aslam_<?=$rand;?>.jpg\">\r\n	<h5>Md Aslam Hossain</h5>\r\n\r\n************\r\n\r\nprofile img{\r\n    width: 160px;\r\n    height: 160px;\r\n    /*padding-top: 15%;*/\r\n    color: #fff;\r\n    border-radius: 50%; \r\n}'),
(45, 'center', 'Any div or element want to center position...\r\njust use this class...\r\n\r\n<div class=\"center-block\">\r\n</div>\r\n\r\n*******\r\n.col-center-block {\r\n    float: none;\r\n    display: block;\r\n    margin: 0 auto;\r\n    /* margin-left: auto; margin-right: auto; */\r\n}'),
(48, 'table [show]', '<?php 	\r\n	$sql=\"select*from child\";\r\n	$result=mysqli_query($conn,$sql);	\r\n?>\r\n    <h1 class=\"text-center mb\">User information</h1>\r\n\r\n    <table class=\"table\"  border=\"1\">\r\n      	<thead>\r\n                <th>Id</th>        \r\n        	<th>Name</th> \r\n      	</thead>\r\n      	<tbody>\r\n		<?php while ($row=mysqli_fetch_assoc($result)) { ?>\r\n			<tr>\r\n		       	  <td><?php echo $row[\'id\'];?></td>\r\n		          <td><?php echo $row[\'name\'];?></td>          \r\n		        </tr>\r\n			<td>\r\n  				<a class=\"btn btn-info\" href=\"view.php?id=<?php echo $row[\'id\']; ?>\">View</a>\r\n  				<a class=\"btn btn-danger\" onclick=\"return confirm(\'Are you sure?\')\"\r\n					href=\"delete.php?id=<?php echo $row[\'id\']; ?>\">Delete</a>\r\n  			</td>\r\n	     	<?php } ?>\r\n      	</tbody>\r\n    </table>'),
(49, 'alert', '(1st part) ex: edit.php\r\n	header(\"Location: index.php?success=1\");\r\n	<a class=\"btn btn-info\" href=\"view.php?success=1\">\r\n	$_SESSION[\'success\']=1;  //true\r\nNB: number not mandatory\r\n\r\n(2nd part...) \r\n<div class=\"col-md-9\">\r\n	<?php if(isset($_GET[\'success\'])) { ?>\r\n		<div class=\"alert alert-success\">\r\n			<strong>Success!</strong> Added successfully.\r\n		</div>\r\n	<?php } ?>\r\n</div>\r\n\r\nsession_start();\r\n\r\n<div class=\"col-md-9\">\r\n	<?php if(isset($_SESSION[\'success\'])) { ?>\r\n		<div class=\"alert alert-success\">\r\n			<strong>Success!</strong> Added successfully.\r\n		</div>\r\n	<?php } ?>\r\n</div>\r\nunset($_SESSION[\'success\']);\r\n\r\nNB: alert list\r\nsuccess, danger, info, warning\r\n\r\nCSS: .alert {\r\n  padding: 20px;\r\n  background-color: #f44336;\r\n  color: white;\r\n}\r\n\r\n\r\n<a href=\"index.php\" class=\"confirmation\"></a>\r\n<script>\r\n    $(\'.confirmation\').on(\'click\', function () {\r\n        return confirm(\'Are you sure?\');\r\n    });\r\n</script>\r\n\r\n<a class=\"btn btn-danger btn-fill pull-center\" onclick=\"return confir'),
(50, 'table [show]', '<?php $sql=\"select*from child where id=$id\";\r\n	$result=mysqli_query($conn,$sql);\r\n  $row=mysqli_fetch_assoc($result); ?>\r\n\r\n<table class=\"table\">\r\n	<tr>\r\n		<th width=\"100\" class=\"text-right\">Name : </th>     \r\n		<td class=\"text-left\"> <?= $row[\'name\']; ?></td>     \r\n	</tr>\r\n	<tr>\r\n		<th width=\"100\" class=\"text-right\">Roll : </th> \r\n		<td class=\"text-left\"> <?= $row[\'roll\']; ?> </td>     \r\n	</tr>\r\n	<tr>\r\n		<th width=\"100\" class=\"text-right\">Age : </th>    \r\n		<td class=\"text-left\"> <?= $row[\'age\']; ?> </td>     \r\n	</tr>					\r\n</table>'),
(51, 'table [insert]', '<form action=\"store.php\" method=\"POST\">\r\n     <div class=\"form-group\">\r\n            <label>Name: </label>\r\n            <input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\" required>            \r\n     </div>\r\n\r\n     <div class=\"form-group\">\r\n            <label>Roll: </label>\r\n            <input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\">            \r\n     </div>\r\n\r\n     <div class=\"form-group\">\r\n            <label>Age: </label>\r\n            <input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\">            \r\n     </div>\r\n         <button type=\"submit\" class=\"btn btn-primary\">Submit</button>\r\n</form>'),
(52, 'table [edit]', '<?php \r\n  	$id= $_GET[\'id\']; \r\n	$conn=connectDB();\r\n	$sql=\"select*from child where id=$id\";\r\n	$result=mysqli_query($conn,$sql);	\r\n  	$row=mysqli_fetch_assoc($result);  \r\n?>\r\n  <h2>Edit Student</h2>\r\n\r\n  <form action=\"update.php?id=<?php echo $id ?>\" method=\"POST\">\r\n\r\n    	<div class=\"form-group\">\r\n      	<label for=\"name\">Name: </label>\r\n      	<input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\" value=\"<?= $row[\'name\']; ?>\" >\r\n    	</div>\r\n\r\n    	<div class=\"form-group\">\r\n      	<label>Roll: </label>\r\n      	<input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\" value=\"<?= $row[\'roll\']; ?>\">\r\n    	</div>\r\n\r\n    	<div class=\"form-group\">\r\n      	<label>Age: </label>\r\n      	<input type=\"text\" class=\"form-control\" name=\"\" placeholder=\"\" value=\"<?= $row[\'age\']; ?>\">\r\n    	</div>\r\n    \r\n    	<button type=\"submit\" class=\"btn btn-primary\">Submit</button>\r\n</form>'),
(53, 'textarea', 'textarea{\r\n      text-align: justify;\r\n      white-space: normal;\r\n   }'),
(54, 'target', 'Create a new tab on browser\r\n\r\n<a class=\"btn btn-success\" target=\"_blank\" href=\"<?= $row[\'link\']; ?>\" >Click Now</a>		'),
(55, 'auto refresh', '<head>\r\n	<meta http-equiv=\"refresh\" content=\"2\" />\r\n</head>'),
(63, 'image', '#userCompleteView {  \r\n  background-image: linear-gradient(rgba(10,0,0,.1),rgba(0,10,0,.2)),url(\\\"../images/user.jpg\\\");\r\n  background-position: center center;\r\n  background-size: cover;\r\n  background-repeat: no-repeat;\r\n  display: block;\r\n  width: auto;  \r\n  min-height: 80vh;\r\n}\r\n\r\n\r\n<img src=\\\"#\\\" class=\\\"img-thumbnail responsive\\\" alt=\\\"No Image found\\\" width=\\\"80\\\">'),
(64, 'Footer design', 'https://css-tricks.com/couple-takes-sticky-footer/');

-- --------------------------------------------------------

--
-- Table structure for table `js`
--

CREATE TABLE `js` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js`
--

INSERT INTO `js` (`id`, `item`, `code`) VALUES
(2, 'single quote ( \' ) in JavaScript', ' alert(\"Sorry user! Your account don\'t create successfully. Please try again.\");\r\n\r\nNB: Just use \'backslash\'  before any single or double quotetion.\r\nJs print only this quation not \'backslash\'\r\n\r\nhttps://www.w3schools.com/js/js_strings.asp'),
(6, 'alert', 'Html\r\n@if (session(\'success\'))\r\n                           <div class=\"alert alert-success\">\r\n                              <strong>Success!</strong> {{ session(\'success\') }}\r\n                           </div>\r\n@endif\r\n\r\njs include\r\nthen\r\n<script type=\"text/javascript\">\r\n      window.setTimeout(function() {\r\n          $(\".alert\").fadeTo(500, 0).slideUp(500, function(){\r\n              $(this).remove(); \r\n          });\r\n      }, 2000);\r\n</script>'),
(9, 'delete', '$sql=\"delete from child where id=6\";123123'),
(5, 'defer ', '<!doctype html>\r\n<body>\r\n<p>...content before scripts...</p>\r\n\r\n<script>\r\n  document.addEventListener(\'DOMContentLoaded\', () => alert(\"(1) DOM ready after defer!\")); // (2)\r\n</script>\r\n\r\n<script defer src=\"https://javascript.info/article/script-async-defer/long.js?speed=1\">\r\n</script>\r\n\r\n<script>\r\n  document.addEventListener(\'DOMContentLoaded\', () => alert(\"(2) DOM ready after defer!\")); // (2)\r\n</script>\r\n\r\n\r\n\r\n<p>...content after scripts...</p>\r\n</body>'),
(7, 'first letter capital', ' <div  class=\"alert alert-success\">\r\n                              <strong>Success!</strong> {{ session(\'success\') }}\r\n                           </div>\r\n\r\n<script type=\"text/javascript\">\r\n      $(\".alert\").each(function(){\r\n        var txt =  $(this).text().replace(/\\s+/g,\' \').trim() ;\r\n        $(this).text(txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase());\r\n      });\r\n   </script>'),
(8, 'hjh', 'jhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `laravel`
--

CREATE TABLE `laravel` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel`
--

INSERT INTO `laravel` (`id`, `item`, `code`) VALUES
(2, 'auth', 'laravel: 5.9 last\r\nphp artisan make:auth\r\n\r\nlaravel: 6.0 to more\r\n\r\ncomposer require laravel/ui\r\nphp artisan ui vue --auth'),
(3, 'database & backend code', '1) create only database name in phpmysql\r\n2) In project select [.env] see line no 9-14\r\n	change it \r\n	DB_DATABASE=DB Name\r\n	DB_USERNAME=root\r\n	DB_PASSWORD=\r\n3) Restart [php artisan serve] Off (Ctrl+C) then On\r\n1st time Go\r\napp/Providers/AppServiceProvider\r\nwrite:  use IlluminateSupportFacadesSchema;  [line 6]\r\n	   Schema::defaultStringLength(191); [function booth line 26]\r\n\r\n4)  php artisan migrate\r\n5)  php artisan migrate:status	[see create database]\r\n6)  php artisan migrate:rollback [remove data from database]\r\n7)  php artisan migrate:refresh or fresh  [remove data then create database]\r\n8)  '),
(4, '1071 laravel error', 'edit your AppServiceProvider.php file and\r\n inside the boot method set a default string length:\r\n\r\nuse IlluminateSupportFacadesSchema;\r\npublic function boot()\r\n{\r\n    Schema::defaultStringLength(191);\r\n}\r\n\r\napp/Providers/AppServiceProvider\r\nwrite:  use IlluminateSupportFacadesSchema;  [line 6]\r\n	   Schema::defaultStringLength(191); [function booth line 26]'),
(5, 'laravel controller', 'php artisan make:controller ControllerName\r\n\r\nEx: FrontendController, BackendController.\r\nThis name must be start Capital letter\r\n\r\n'),
(6, 'Session', 'Controller:\r\n      return back()->with(\'status\', \'Product insert successfully\');\r\n\r\npage.blade.php:\r\n\r\n	@if (session(\'status\'))\r\n        	<div class=\"alert alert-success\" role=\"alert\">\r\n                	{{ session(\'status\') }}\r\n                 </div>\r\n        @endif\r\n'),
(7, 'all in one', 'create model\r\n$php artisan make:model Model_name -m\r\n\r\nmigrate\r\n$ php artisan migrate\r\n\r\ncreate controller\r\n$ php artisan make:controller Controller_name\r\n\r\nmodel, controler, migration all\r\n\r\n$php artisan make:model Category -mc\r\n\r\nOutput all and also controller seen like CategoryController\r\nbut we put only Category'),
(8, 'Laravel timeZone', 'https://carbon.nesbot.com/docs/\r\n\r\nController: \r\nCarbon::now(\'Asia/Dhaka\')\r\n\r\n Blade:\r\n {{ $category->created_at->diffForHumans() }}\r\n\r\n//All time zone set  [go config/app.config/line no 70  \'Asia/Dhaka\']'),
(9, 'laravel login permission', '@auth\r\n	you are now login\r\n@else\r\n	You are not login\r\n@endauth\r\n\r\nOr.....\r\n\r\n@guest\r\n	You are not login\r\n@endguest'),
(10, 'Laravel table relationship', 'Suppose two table\r\nCategory(id, category_name)\r\nproduct(id, category_id)\r\n\r\nNow call the category_name(1st table) \r\nfrom category_id(2nd table)\r\n\r\n1st way...\r\n..............\r\n@forelse($products as $product)\r\n<tr>\r\n     <td>\r\n	{{ AppCategory::find($product->category_id)->category_name}}\r\n     </td>\r\n</tr>\r\n@endforelse\r\n\r\n2nd way....\r\n.................\r\nGo to product.php [model]\r\n\r\nfunction relationToTable(){\r\n      return $this->hasOne(\'AppCategory\', \'id\', \'category_id\');\r\n      // N:B: hasOne(\'Destination model\', \'Destination model id(primary key)\', \'to this model foreign key\');\r\n   }\r\n\r\n\r\n@forelse($products as $product)\r\n<tr>\r\n     <td>\r\n	    {{ $product-> relationToTable-> category_name }}\r\n     </td>\r\n</tr>\r\n@endforelse\r\n'),
(12, 'Laravel latest value show', '@php\r\n	$menus=App\\Category::latest()->take(5)->get();\r\n@endphp\r\n\r\n@foreach ($menus as $menu)\r\n	{{$menu->category_name}}	\r\n@endforeach\r\n\r\nOutput: Now show the latest five(5) category name'),
(19, 'view()\r\nredirect()\r\nback()\r\nwith()', 'suppose your page location: \'contact\' page\r\nblog\r\n---->views\r\n	----->layouts\r\n			--->home\r\n			--->about\r\n			--->contact\r\nMy present location \'contact\' page and a action page working now\r\n1) return view(\'layouts/contact\', compact(\'something\'));\r\n	N:B: session   with()  not allow\r\n\r\n2) return redirect(contact)->with(\'status\', \'message allow\');\r\n	N:B: session with() allow\r\n\r\n3) return back()->with(\'status\', \'message allow\');\r\n	N:B: session with() allow\r\n\r\n\r\nSession:\r\n\r\nwithStatus(\'Message send successfully!);\r\n\r\nsame meaning but \'status\' should capital letter\r\n\r\n\r\n@if (session(\'status\'))\r\n       <div class=\"alert alert-success\" role=\"alert\">\r\n              {{ session(\'status\') }}\r\n       </div>\r\n@endif'),
(20, 'Laravel Mail', 'link: https://www.youtube.com/watch?v=iQoRh_9LkjU\r\n\r\nvideo :9  duration: 33:55\r\n\r\nhttps://laravel.com/docs/5.8/mail\r\n\r\n#Driver Prerequisites\r\ncomposer require guzzlehttp/guzzle\r\n\r\n#generating-mailables\r\nphp artisan make:mail OrderShipped\r\n\r\nN:B: Sometime it don\'t work when compact send the variable file. So it is better to follow video link\r\n'),
(21, 'error reporting', '@php\r\n	error_reporting(0);\r\n@endphp'),
(22, 'laravel github project run', 'Hello friends... Today I am going to show how to run github laravel projects.\r\nlink: https://www.youtube.com/watch?v=ngzOHoyITfM\r\n\r\n1. download the laravel project from github.\r\n2. copy that project in hotdocs folder and open the folder location in cmd.\r\n3. now first rename the \"env.example file to.env\"\r\n4. you can configure the database information here.\r\n5. now open cmd and run some commands...\r\n -Run composer install or php composer.phar install\r\n -Run php artisan key:generate\r\n -Run php artisan migrate\r\n -Run php artisan db:seed to run seeders, if any.\r\n -Run php artisan serve\r\n\r\nthat\'s all.. \r\nProblems discussion::\r\nyou may have the problem with the composer or the php...\r\ncheck all are installed.. and the paths are added as the environment variable...\r\nThese two paths have to be added to run laravel project...\r\n1. C:ProgramDataComposerSetupin\r\n2. C:xamppphp \r\n\r\nif these are not added.. then add them \r\n.. thank you very much for watching... Please subscribe and share...:)\r\nCateg'),
(23, 'soft delete', 'https://laravel.com/docs/5.8/eloquent#soft-deleting\r\n\r\nvideo 5: time 00:29:00\r\nlaravel --v 5.7\r\nphp artisan --version\r\n\r\nphp artisan migrate:rollback\r\nphp artisan migrate\r\nthen migrate again...\r\nN:B: it is just create a new field in database.\r\n'),
(24, 'image upload', '[video 6 [00.20.00]]\r\nhttp://image.intervention.io/getting_started/installation\r\n1st step: \r\n$composer require intervention/image\r\n\r\n2nd step:\r\ngo-> config/app.php\r\n\r\nsearch-> $providers [array]\r\n\r\npaste: Intervention\\Image\\ImageServiceProvider::class,\r\n\r\n\r\nsearch-> $aliases [array]\r\n\'Image\' => Intervention\\Image\\Facades\\Image::class,\r\n\r\n3rd step:\r\nuse Image;\r\n\r\nfunction insert_product(Request $request) {\r\n\r\n//this part not need for image upload...\r\n	$last_inserted_id = Product::insertGetId([\r\n        	 \'category_id\'=>$request->category_id,\r\n         	\'name\'=>$request->name\r\n]);\r\n      if ($request->hasFile(\'product_image\')) {  //please link image upper... use Image;\r\n            $photo_to_upload=$request->product_image;\r\n            $fileName=$last_inserted_id.\".\".$photo_to_upload->getClientOriginalExtension();\r\n            Image::make($photo_to_upload)->resize(400,380)\r\n->save(base_path(\'public/Full_Project/images/product_images/\'.$fileName));  \r\n            //Image quality   save(ba'),
(25, 'laravel project upload', 'https://www.youtube.com/watch?v=e7eSJCevo4c'),
(26, 'Simple Laravel Layouts', 'https://scotch.io/tutorials/simple-laravel-layouts-using-blade'),
(27, 'Laravel Calculate Age', '<td>\r\n       {{ $SingerList->DOB}} <br>\r\n       {{\\Carbon\\Carbon::parse($SingerList->DOB)\r\n	->diff(\\Carbon\\Carbon::now())\r\n	->format(\'%y years, %m months and %d days\')}}\r\n</td>\r\n\r\nExample:\r\nInput: 1994-08-06\r\n\r\nOutput: \r\n1994-08-06 \r\n25 years, 5 months and 16 days'),
(30, 'Laravel pagination', 'Note : GET method\r\n1) blade.php\r\n   <form action=\"{{ url(\'all_singerName\')}}\" method=\"get\">\r\n      <input type=\"text\" name=\"singerName\" value=\"{{ old(\'singerName\')}}\" class=\"form-control\" placeholder=\"Name\">        \r\n      <button class=\"btn btn-success btn-block\" type=\"submit\">Add Now</button>         \r\n   </form>\r\n\r\n2) web.php\r\n   Route::get(\'all_singerName\', \'Singer@all_singerName\');\r\n\r\n3)\r\n   public function all_singerName(Request $request){\r\n      $email = Auth::user()->email;\r\n\r\n      $singerName = $request->singerName;\r\n\r\n      {{-- 1st way input --}}\r\n      $all_songs = AllSong::where(\'email\', $email)->where(\'singerName\', $singerName)->paginate(5);\r\n\r\n      {{-- 2nd way input --}}\r\n      $all_songs = AllSong::where(\'email\', \'Like\', \'%\'.$email.\'%\')->where(\'singerName\', \'Like\', \'%\'.$singerName.\'%\')->paginate(5);\r\n      $all_songs->appends($request->only(\'singerName\')); //get request\r\n\r\n      return view(\'singerName\', compact(\'all_songs\'));\r\n   }\r\n\r\n4) Output \r\n\r\n   <div class=\"card-body\">\r\n      <table class=\"table\">\r\n            <tr class=\"text-center\">\r\n               <th>Sl. No</th>\r\n               <th>Song name</th>                                             \r\n            </tr>\r\n         </thead>\r\n         <tbody>\r\n         \r\n            @forelse($all_songs as $all_song)\r\n               <tr class=\"text-center\">\r\n                  <td>{{$loop->index + $all_songs->firstItem()}}</td>\r\n                  <td>{{ $all_song->songName}}</td> \r\n               </tr>\r\n            @empty\r\n               <tr class=\"text-center text-danger\">\r\n                  <td colspan=\"2\">No data found...</td>\r\n               </tr>\r\n            @endforelse\r\n         </tbody>\r\n      </table>\r\n\r\n      {{-- 1st way input --}}\r\n      {{$all_songs->appends($_GET)->links()}}\r\n\r\n      {{-- 2nd way input --}}\r\n      {{$all_songs->links()}} \r\n      Or\r\n      {{$all_songs->appends($_GET)->links()}}\r\n   </div>\r\n'),
(31, 'email', 'MAIL_DRIVER=smtp\r\nMAIL_HOST=smtp.gmail.com\r\nMAIL_PORT=587\r\nMAIL_USERNAME=aslamhossainctg@gmail.com\r\nMAIL_PASSWORD=swnwfctznnjruscc\r\nMAIL_ENCRYPTION=tls'),
(32, 'laravel date', '<td>\r\n      {{ $category->created_at->format(\'d-M-Y  h:i:s A\')}}\r\n      <br>\r\n      {{ $category->created_at->diffForHumans()}}\r\n</td>\r\n\r\ndate age\r\n\r\n{{\\Carbon\\Carbon::parse($SingerList->DOB)->diff(\\Carbon\\Carbon::now())->format(\' %y years \')}} \r\n'),
(33, 'app name', '.evn\r\n\r\nAPP_NAME=\"Enter app name\"'),
(34, 'last five years', '@foreach(range(date(\'Y\')-5, date(\'Y\')) as $y)\r\n      {{$y}}\r\n@endforeach \r\n\r\noutput: \r\n2015 	2016	2017 	2018	 2019	 2020'),
(35, '.env.example to .env', 'https://www.youtube.com/watch?v=xBFPGTle7nU\r\n\r\ncmd\r\n\r\nC:\\Users\\Aslam>cd C:\\xampp\\htdocs\\folderName\r\n\r\ndir\r\n\r\nren .env.example .env\r\n'),
(38, 'Tinker', 'https://artisansweb.net/use-laravel-tinker/\r\n\r\ncomposer require laravel/tinker\r\nphp artisan make:model Product\r\nphp artisan tinker\r\n\r\n$p = new App\\Product;\r\n$p->name = \'Test Product\';\r\n$p->description = \'Test Product Body\';\r\n$p->password = Hash::make(12345678)\r\n$p->save();\r\n\r\nOutput:\r\n$a = new App\\user;\r\n$a = \\App\\user::first();\r\n=> App\\User {\r\n     id: 1,\r\n     name: \"aslam2\",\r\n     email: \"admin@admin.com\",\r\n     email_verified_at: null,\r\n     created_at: \"2020-07-15 15:47:09\",\r\n     updated_at: \"2020-07-15 15:47:09\",\r\n   }\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `linux`
--

CREATE TABLE `linux` (
  `id` int(11) NOT NULL,
  `item` varchar(200) DEFAULT NULL,
  `code` varchar(60000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linux`
--

INSERT INTO `linux` (`id`, `item`, `code`) VALUES
(1, 'Install Google Chrome', 'Open your terminal Ctrl+Alt+T keyboard shortcut\r\n\r\n1. Download Google Chrome\r\nwget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb\r\n\r\n2. Install Google Chrome\r\nsudo apt install ./google-chrome-stable_current_amd64.deb\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mysql`
--

CREATE TABLE `mysql` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mysql`
--

INSERT INTO `mysql` (`id`, `item`, `code`) VALUES
(1, 'join table', 'create table student_info(\r\n	roll int NOT NULL AUTO_INCREMENT,\r\n	name varchar(30) NOT NULL,\r\n	gender varchar(30),\r\n	age int,\r\n	PRIMARY KEY (roll)\r\n	);\r\n\r\ncreate table result_info(\r\n	reg_number int NOT NULL ,\r\n	roll int,\r\n	gpa double(3,2),\r\n	group_name varchar(30),\r\n	gender varchar(30),\r\n	PRIMARY KEY (reg_number)\r\n	);\r\n\r\nQuery for details=>>\r\n\r\nselect student_info.roll, reg_number, name, student_info.gender, group_name, gpa\r\nfrom student_info,result_info\r\nwhere student_info.roll=result_info.roll;'),
(3, 'update', '1)	$sql=\"update child set name=\'Aslam\' where id=8\";\r\n2)	$sql=\"update child set roll=1 where id=7\";\r\n\r\n3) 	$sql=\"update child set name=\'$name\',roll=\'$roll\' where id=$id\";'),
(6, 'sum', 'table\r\n\r\nid	salary	bonus	extra	sum..?\r\n\r\n01	500	200	300\r\n02	100	200	400\r\n03	500	200	300\r\n\r\n$sql=select id,(select sum(salary),(bonus),(extra) as tblSum(Earnings))\r\n\r\nfrom table_name\");\r\n\r\n'),
(7, 'Search Last or first input', 'ASC\r\n..........\r\n$sql  =\"select * from table_name order by id ASC limit 1\";\r\n$result  =  mysqli_query($conn,$sql);\r\n\r\nDESC\r\n..........\r\n$sql  =\"select * from table_name order by id DESC limit 1\";\r\n$result  =  mysqli_query($conn,$sql);\r\n......\r\nN:B: order by id, date, age no matter...\r\n......\r\nselect all without last one\r\n$sql =\"SELECT * FROM table ORDER BY id DESC LIMIT 13 OFFSET 1\";\r\n\r\nOr...\r\n$sql =\"select *from table where id!=(select max(id) from table )\";'),
(8, 'UNION all', '$sql  =\"select id,item,code from html UNION all\r\n                 select id,item,code from css UNION all\r\n                 select id,item,code from bootstrap UNION all\r\n                 select id,item,code from js UNION all\r\n                 select id,item,code from php UNION all\r\n                 select id,item,code from laravel UNION all\r\n                 select id,item,code from mysql UNION all\r\n                 select id,item,code from android UNION all\r\n                 select id,item,code from editor UNION all\r\n                 select id,item,code from softwere UNION all\r\n                 select id,item,code from github UNION all\r\n                 select id,item,code from other\r\n               \";\r\n         $result  =  mysqli_query($code,$sql);\r\n\r\nSame output \r\n\r\n$type = \'code_type\';\r\n\r\n         $all_item =\"select *from $type where id!=(select max(id) from $type)\";\r\n         $all_row_result = mysqli_query($code,$all_item);\r\n\r\n         $last_item =\"SELECT * FROM $type ORDER BY ID D'),
(9, 'xampp sql maximum length varchar', 'Although VARCHAR supports \r\nthe maximum size at 65535 characters\r\nthe actual maximum value depends \r\non other columns in the table and \r\ncharacter set: Maximum row size\r\n is 65535 bytes in MySQL that shared \r\namong all columns in the table\r\nexcept TEXT/BLOB columns.'),
(10, 'insert', '1)	$sql=\"insert into child values(null,\'Raiz\',15)\";\r\n\r\n2) 	suppose: 4 cloumn	(id, name, age, mobile)\r\n\r\nif u insert all\r\n\r\ninsert into child (name, age, mobile) values (\'Raiz\',15, 0168060)\";\r\nid: auto increment...\r\n\r\n3) 	if insert only name, mobile \r\n\r\ninsert into child (name, mobile) values (\'Raiz\' 01680607293)\";\r\nN:B: Always fill up the 2nd column.\r\nAfter (id) auto increment the 2nd column(name) must be filled.  123222333111');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `item`, `code`) VALUES
(1, 'link', '1) http://www.primitivetype.com/articles/quotes_inputs.php\r\n\r\n2) https://stackoverflow.com/questions/2004298/input-field-containing-double-quotes-value\r\n\r\n3) https://www.google.com/search?client=firefox-b-d&q=how+to+send+a+single+quote+text+input\r\n'),
(2, 'screen/display', 'what is my screen resolution ?\r\n\r\n**********\r\nhttps://bestfirms.com/what-is-my-screen-resolution/'),
(3, 'Why is there a \"/? I=1\"', 'When You are using free hosting it will automatic add ?i=1\r\n\r\nBut I have Solution for it.\r\n\r\nAdd following code in .htaccess file to remove ?i=1 from URL.\r\n\r\nCode:\r\n\r\nRewriteCond %{QUERY_STRING} ^(.*)i=[^&]+(.*)$ [NC]\r\n\r\nRewriteRule ^(.*)$ /$1?%1%2 [R=301,L]'),
(4, 'string length', 'Calculate String Length\r\n\r\nlink:\r\nhttps://codebeautify.org/calculate-string-length'),
(5, 'Auto Scroll Chrome', '1)	Best Auto Scroll\r\nhttps://chrome.google.com/webstore/detail/best-auto-scroll/bmbodajfpkgodcdkdiakjdhmdpppedbb/related\r\n\r\n2)	Simple Auto Scroll\r\nhttps://chrome.google.com/webstore/detail/simple-auto-scroll/dccjkemhmffnljlnnoffljpkhkfpldff/related?hl=en\r\n'),
(6, 'Dark Mode [W10]', '1) To put Windows 10 in dark mode, first open the [Start Menu] and type [dark theme settings].\r\nClick on the first option that appears.\r\n\r\n2) [Start menu] --> settings --> personalization --> color --> see down ^ choose your default  app mood.'),
(21, 'FileZilla transfer very fast', '1) In Filezilla click Edit.\r\n2) Click Settingsâ€¦.\r\n3) Click Transfers.\r\n4) Increase Maximum simultaneous transfers to 10.\r\n5) Click Ok.'),
(8, 'W10 activator \r\n[save dot cmd]', 'windows 10 home & other: https://productkey.net/free-windows-10-home-product-key-2019/\r\n\r\nG-Drive link: https://drive.google.com/open?id=10pX6RTx3IzbtmFQe7kPdYa8cd5WjQfpf\r\n\r\n'),
(10, 'Chrome hang', '1) cmd with administor: netsh winsock reset\r\n2) in chrome: setting: below--> show advanced settings\r\n	system\r\n	Use hardware acceleration when available\r\n	off'),
(11, 'Screen resolution', 'https://bestfirms.com/what-is-my-screen-resolution/'),
(13, 'Laravel Bangla Tutorial (2019)', 'https://drive.google.com/open?id=1lFeV1rRPxG8iBFnF06ArMCvh0hKwO6d1'),
(14, 'Office 2019 free ', 'link:\r\nhttps://www.youtube.com/watch?v=aif9g-hcAew'),
(15, 'All softwere', 'http://103.85.156.222/\r\n\r\nbdplex'),
(16, 'top 10', 'Top 10 Sites for your career:\r\n1. LinkedIn\r\n2. Indeed\r\n3. Naukri\r\n4. Monster\r\n5. JobBait\r\n6. Careercloud\r\n7. Dice\r\n8. CareerBuilder\r\n9. Jibberjobber\r\n10. Glassdoor\r\nTop 10 Tech Skills in demand in 2019:\r\n1. Machine Learning\r\n2. Mobile Development\r\n3. SEO/SEM Marketing\r\n4. Data Visualization\r\n5. Data Engineering\r\n6. UI/UX Design\r\n7. Cyber-security\r\n8. Cloud Computing/AWS\r\n9. Blockchain\r\n10. IOT\r\nTop 9 Sites for Free Online Education:\r\n1. Coursera\r\n2. edX\r\n3. Khan Academy\r\n4. Udemy\r\n5. iTunesU Free Courses\r\n6. MIT OpenCourseWare\r\n7. Stanford Online\r\n8. Codecademy\r\n9. Open Culture Online Courses\r\nTop 10 Sites to learn Excel for free:\r\n1. Microsoft Excel Help Center\r\n2. Excel Exposure\r\n3. Chandoo\r\n4. Excel Central\r\n5. Contextures\r\n6. Excel Hero\r\n7. Mr. Excel\r\n8. Improve Your Excel\r\n9. Excel Easy\r\n10. Excel Jet\r\nTop 10 Sites to review your resume for free:\r\n1. Zety Resume Builder\r\n2. Resumonk\r\n3. Resume dot com\r\n4. VisualCV\r\n5. Cvmaker\r\n6. ResumUP\r\n7. Resume Genius\r\n8. Resumebuilder\r\n9. Res'),
(19, 'Responsive site', 'http://www.responsinator.com/'),
(20, 'free hosting	', 'https://cp1.awardspace.net/file-manager/'),
(22, 'km player all song', 'option/\r\nplay/\r\nafter playback/\r\nplay next file in the folder\r\n\r\nN:B: All file not show in playlist but all song play one by one\r\n\r\nsoftware version  2020.03.24.15  + more');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `item`, `code`) VALUES
(1, 'date & time', 'date_default_timezone_set(\"Asia/Dhaka\");\r\n$today= date(\"Y-m-d-D\");\r\n\r\n$lastDay = \r\ndate (\"Y-m-d\", strtotime(\"-1 day\", strtotime($today))); \r\n$lastMonth = \r\ndate (\"Y-m-d\", strtotime(\"-1 month\", strtotime($today))); \r\n$NextYear = \r\ndate (\"Y-m-d\", strtotime(\"1 year\", strtotime($today))); \r\n\r\n$todayday = date(\'l\', strtotime($today));\r\nsmall [L]\r\nEx: saturday, sunday etc...\r\n\r\n$day = date(\'d\', strtotime($lastMonth));\r\n$month = date(\'m\', strtotime($lastMonth));\r\n$year = date(\'Y\', strtotime($lastMonth));\r\n\r\nTime	\r\n//Example Y-m-d H:i:s date string.\r\n$date = \'2019-02-15 16:56:01\';\r\n \r\n//12 hour format with lowercase AM/PM\r\necho date(\"g:ia\", strtotime($date))\r\necho date(\"h:ia\", strtotime($date))\r\nEx: g= 05=5 without zero\r\n	h=05=05 full\r\na= small am/pm  A=capital AM/PM\r\n\r\n $total=strtotime($end_time) - strtotime(date(\"H:i:s\"));\r\n   $minute=$total/60;\r\n   $total=$minute/60;'),
(2, 'db connection', 'input 1: $conn\r\n<?php\r\n	function connectDB() {\r\n	$conn =mysqli_connect(\'localhost\',\'root\',\'\',\'bazar\');\r\n	return $conn;\r\n	}\r\n?> NB: server, user name, pass, db name\r\n\r\nCall this function\r\n<?php  $code = conn() ;?>\r\n\r\ninput 2: $result\r\n<?php\r\n	$conn=connectDB();\r\n	$sql=\"select*from userinfo\";\r\n	$result=mysqli_query($conn,$sql);\r\n	return $result;\r\n?>'),
(3, ' session', 'session_start();\r\n $_SESSION[\'adminLogin\']=true; \r\n $_SESSION[\'login\']=$admin;\r\nunset($_SESSION[\'id_pass_fail\']);\r\n\r\n/*logout*/\r\nsession_start();\r\nsession_destroy();\r\n\r\n<?php $_SESSION[\'successfully\']=true; ?>\r\n\r\n<?php if(isset($_SESSION[\'successfully\'])) { ?>\r\n    <?php \r\n        if (isset($_GET[\'type\'])) {\r\n            $code_type =  $_GET[\'type\'];\r\n        }\r\n        echo \'<script type=\"text/javascript\">\r\n                alert(\"Hellow [  \'.$code_type.\'  ] code insert successfully.\");\r\n                </script>\';\r\n    ?>\r\n<?php } ?>\r\n'),
(4, 'include', '<?php  include(\'connection.php\'); ?>'),
(5, 'header', '<?php header(\"Location: index.php?id=$id\"); ?>\r\n\r\n<a href=\"index.php?id=$id\"></a>\r\n\r\n echo \"<script>window.location.href=\'index.php?id=$id\'</script>\";\r\n\r\n$id= $_GET[\'id\'];\r\n'),
(6, 'isset', 'session_start();\r\nif(!isset($_SESSION[\'login\'])){\r\n    header(\"location: index.php\");\r\n}\r\nif(isset($_SESSION[\'login\'])){\r\n    header(\"location: about.php\");\r\n}'),
(7, 'login, logout', '(1st page) ex: login.php\r\nup page:  <?php session_start(); ?>\r\n..............\r\n..............\r\n(2nd page) ex: confirmLogin.php\r\n$email=$_POST[\'email\'];\r\n$pass=$_POST[\'password\'];\r\n\r\n$sql=\"select * from admin where email=\'$email\' AND password=\'$pass\'\";\r\n$rowcount=mysqli_num_rows($result);\r\n\r\nif($rowcount==1) {\r\n	$_SESSION[\'login\']=true;	\r\n	header(\"Location: index.php\");\r\n} else {\r\n......................\r\n......................\r\n\r\n(3rd page) ex: index.php\r\n\r\nup page:  <?php session_start(); \r\nif(!isset($_SESSION[\'login\'])){\r\nheader(\"Location: login.php\");\r\n}\r\n\r\n(4th page) ex:logout.php\r\n<?php \r\nsession_start();\r\nsession_destroy();\r\nheader(\"Location: login.php\");\r\n\r\n'),
(27, 'description limitation', '<a href=\"view.php\" class=\"btn btn-default\">\r\n<?= substr($row[\'description\'], 0, 80) . \'...\' ?>\r\n</a>'),
(9, 'confirm password', '(2nd page )\r\n<?php\r\n$name=$_POST[\'name\'];\r\n$pass=$_POST[\'pass\'];\r\n$conPass=$_Post[\'con_pass\'];\r\n\r\n	if($pass !=$conPass) {\r\n	session_start();\r\n	$_SESSION[\'error_msg\']=\"password and confirm Password don\'t match\";\r\n	heade(\"Location: registration.php\");\r\n?>\r\n	$con=.....\r\n	$sql=\"insert into ....\";\r\n\r\n(1st page registration.php)\r\n<?php if(isset($_SESSION[\'error_msg\'])) { ?>\r\n	<div class=\"alert alert-warning\">\r\n	<strong>Warning!</strong> <?php echo $_SESSION[\'error_msg\']; ?>\r\n	</div>\r\n<?php } ?>'),
(10, 'root path', '<?php\r\n	$url=\'http://localhost/class/blog/admin/\';\r\n?>\r\n\r\n<a href=\"<?php echo $url; ?> post/index.php\"> Post </a>'),
(11, 'image upload', 'image is (varchar(150))\r\n(1st page)\r\n<form action=\"store.php\" enctype=\"multipart/form-data\" method=\"POST\">\r\n	<label	for=\"image\">Image</lable>\r\n	<input	type=\"file\" name=\"president_photo\">	\r\n</form>\r\n\r\n(2nd)\r\nN:B: \"upload\" folder will be root position\r\n$president_photo=\'profile_picture/\'. $_FILES[\'president_photo\'][\'name\'];\r\nmove_uploaded_file($_FILES[\'president_photo\'][\'tmp_name\'],$president_photo);\r\n$sql= \"insert.... (null, $president_photo);\r\n\r\n(3rd index.php)\r\nimage show when click the \"view\" button\r\n\r\n<img src=\"<?php echo $row[\'image\']; ?>\" width=\'100\'>\r\n	\r\n(4th) click \'delete\' button\r\n\r\n$id=$_GET[\'id\'];\r\n$sql=\"select*from posts where id=$id\'\";\r\n$data=mysqli_fetch_assoc($reslt);\r\n$image_location=\'$data[\'image\'];\r\n\r\nif(file_exists($image_location)){\r\nunlink($image_location);=> for image delete code(unlink)\r\n}\r\n\r\n$sql=\"delete*from posts where id=$id\'\";\r\n$result;\r\nheader (\'Location: index.php\');\r\n\r\nif(file_exists($image_location)){\r\n	echo \"File have\";\r\n}else{\r\necho \"don\'t have\";\r\n}'),
(12, 'calculating Age', '$_age = floor((time() - strtotime(\'1986-09-16\')) / 31556926);\r\n\r\n31556926 is the number of seconds in a year.\r\n\r\n[365*24*60*60]'),
(13, 'random number', '$uniqid = uniqid();\r\n$rand_start = rand(1,5);\r\n$rand_8_char = substr($uniqid,$rand_start,8);\r\n\r\necho \'<script type=\"text/javascript\">\r\n	alert(\"See Logic: Result will be 8 digit:\nFull: \'.$uniqid.\'\nDistance:  \'.$rand_start.\'\nResult:   \'.$rand_8_char.\'\");\r\n		      </script>\';\r\n	'),
(14, 'replace', '$search = array(\"_\", \"-\", \"A\");\r\n$replace  = array(\"/\", \"_\", \"a\");\r\n$target=\'A_s-lAm\';\r\n$result=str_replace($search, $replace, $dob.$today);\r\n\r\necho $result;\r\ninput		A_s-lAm\r\nOutput		a/slam'),
(15, 'time', 'Time to time minus or plus\r\n\r\n$total=strtotime(\"12:10\") - strtotime(\"12:00\");\r\nAns: 600\r\n\r\nonly time: \r\n$total=strtotime(\"10:10\");\r\nans: 1564373400\r\nbecause it convert to year from now then convert to second\r\n\r\nSo u should convert it...\r\n$total=strtotime(\"10:10\") - strtotime(\"09:00\");\r\nans:4200\r\n\r\n$total=strtotime(\"10:10\") - strtotime(\"00:00\");\r\nans:36600 [10h*60m + 10=610m*60s=36600s]\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(16, 'Copy & Paste URL Link', 'Suppose my server URL now....  \r\nhttp://localhost/job/page.php?id=1\r\n\r\nphp code...\r\n1) echo $_SERVER[\'PHP_SELF\'];	\r\nOutput: /job/page.php\r\n\r\n2) echo $_SERVER[\'SERVER_NAME\'];	\r\nOutput: localhost\r\n\r\n3) echo $_SERVER[\'REQUEST_URI\'];	\r\nOutput: /job/page.php?id=1\r\n\r\nSo if i want full URL i can use\r\n1) echo $_SERVER[\'SERVER_NAME\'] . $_SERVER[\'PHP_SELF\'];\r\nOutput: localhost/job/page.php\r\n\r\n2) echo $_SERVER[\'SERVER_NAME\'].$_SERVER[\'REQUEST_URI\'];\r\nOutput: localhost/job/page.php?id=1 \r\n\r\n3) Full URL\r\n$_SERVER[\'SCRIPT_FILENAME\'];\r\nOutput: E:/laragon/www/job/page.php?id=1 \r\n\r\n4)  After all\r\n$from	= $_SERVER[\'REQUEST_URI\'];\r\n$to	= $_SERVER[\'PHP_SELF\'];\r\n\r\n$goTo = str_replace($from, $to, $from);\r\n\r\nN:B: It work only project name then show URL.\r\nSo it is helpfull for redirect to final page \r\n\r\nExample:\r\nfrom) /project/page.php\r\nto)   /project/loginPage.php?id=2\r\n\r\ngoTo) /project/loginPage.php?id=2'),
(19, 'How to remove -index.php- from the URL', 'This is the basic rule to hide index.php \r\nfrom the URL. Put this in your root .htaccess file. \r\nmod_rewrite must be enabled with PHP \r\nand this will work for the PHP version \r\nhigher than 5.2.6.\r\nRewriteEngine On\r\n\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule ^(.*)$ /index.php?/$1 [L]\r\nFor PHP version less than 5.2.6 try this:\r\nRewriteEngine On\r\nRewriteCond %{REQUEST_FILENAME} !-f\r\nRewriteCond %{REQUEST_FILENAME} !-d\r\nRewriteRule ^(.*)$ /index.php/$1 [L]\r\nYou can also use the following code:\r\nRewriteEngine On\r\nRewriteCond %{THE_REQUEST} ^[A-Z]{3,9} /(.*)index.php($| |?)\r\nRewriteRule ^ /%1 [R=301,L]'),
(20, 'Code for Database Class (PHP-MySQLi Connection)', 'config.php\r\n<?php\r\ndefine(\"DB_HOST\", \"localhost\");\r\ndefine(\"DB_USER\", \"root\");\r\ndefine(\"DB_PASS\", \"\");\r\ndefine(\"DB_NAME\", \"your_db_name\");\r\n?>\r\nDatabase Calss:\r\n<?php\r\nClass Database{\r\n public $host   = DB_HOST;\r\n public $user   = DB_USER;\r\n public $pass   = DB_PASS;\r\n public $dbname = DB_NAME;\r\n \r\n \r\n public $link;\r\n public $error;\r\n \r\n public function __construct(){\r\n  $this->connectDB();\r\n }\r\n \r\nprivate function connectDB(){\r\n $this->link = new mysqli($this->host, $this->user, $this->pass, \r\n  $this->dbname);\r\n if(!$this->link){\r\n   $this->error =\"Connection fail\".$this->link->connect_error;\r\n  return false;\r\n }\r\n }\r\n \r\n// Select or Read data\r\npublic function select($query){\r\n  $result = $this->link->query($query) or \r\n   die($this->link->error.__LINE__);\r\n  if($result->num_rows > 0){\r\n    return $result;\r\n  } else {\r\n    return false;\r\n  }\r\n }\r\n \r\n// Insert data\r\npublic function insert($query){\r\n $insert_row = $this->link->query($query) or \r\n   die($this->link->error.__LINE__);\r\n i'),
(21, 'Session Class for any PHP Project', 'Session.php\r\n<?php\r\n/**\r\n*Session Class\r\n**/\r\nclass Session{\r\n public static function init(){\r\n  if (version_compare(phpversion(), \'5.4.0\', \'<\')) {\r\n        if (session_id() == \'\') {\r\n            session_start();\r\n        }\r\n    } else {\r\n        if (session_status() == PHP_SESSION_NONE) {\r\n            session_start();\r\n        }\r\n    }\r\n }\r\n\r\n public static function set($key, $val){\r\n  $_SESSION[$key] = $val;\r\n }\r\n\r\n public static function get($key){\r\n  if (isset($_SESSION[$key])) {\r\n   return $_SESSION[$key];\r\n  } else {\r\n   return false;\r\n  }\r\n }\r\n\r\n public static function checkSession(){\r\n  self::init();\r\n  if (self::get(\"login\")== false) {\r\n   self::destroy();\r\n   header(\"Location:login.php\");\r\n  }\r\n }\r\n\r\n public static function checkLogin(){\r\n  self::init();\r\n  if (self::get(\"login\")== true) {\r\n   header(\"Location:index.php\");\r\n  }\r\n }\r\n\r\n public static function destroy(){\r\n  session_destroy();\r\n  header(\"Location:login.php\");\r\n }\r\n}\r\n?>\r\nUse for Login Controller:\r\n<?php\r\n/**\r\n* '),
(22, 'Use for Sample Login Page:', '<?php \r\n include \'../lib/Session.php\';\r\n Session::init();\r\n?>\r\n\r\n<?php include \'../config/config.php\'; ?>\r\n<?php include \'../lib/Database.php\'; ?>\r\n<!DOCTYPE html>\r\n<head>\r\n<meta charset=\"utf-8\">\r\n<title>Login</title>\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"css/stylelogin.css\"/>\r\n</head>\r\n<body>\r\n<div class=\"container\">\r\n<section id=\"content\">\r\n<?php\r\n $db = new Database();\r\n\r\n if($_SERVER[\"REQUEST_METHOD\"] == \"POST\"){\r\n $username = mysqli_real_escape_string($db->link, $username);\r\n $password = mysqli_real_escape_string($db->link, $password);\r\n\r\n    $query = \"SELECT * FROM user WHERE username=\'$username\' \r\n     and password=\'$password\'\";\r\n    $result = $db->select($query);\r\n    if ($result != false) {\r\n        $value = $result->fetch_assoc(); \r\n        Session::set(\"login\", true);\r\n        Session::set(\"username\", $value[\'username\']);\r\n        Session::set(\"userId\", $value[\'id\']);\r\n        header(\"Location: index.php\");\r\n       //echo \"<script>window.location = \'index.php\';</scri'),
(23, 'if (ternary operator)', '{{ ($category->menu_status == 1) ? \'Yes\':\'No\'}}\r\n\r\nit means\r\n\r\nif($category->menu_status == 1){\r\n    echo \"Yes\";\r\n}else{\r\n    echo \"No\";\r\n}'),
(24, 'DatePicker', 'Linl: https://gijgo.com/datepicker/example/bootstrap\r\n\r\n<html>\r\n<head>\r\n    <meta charset=\"utf-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\r\n    <title>Bootstrap DatePicker</title>\r\n    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>\r\n    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\r\n    <script src=\"https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js\" type=\"text/javascript\"></script>\r\n    <link href=\"https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n</head>\r\n<body>\r\n    <input id=\"datepicker\" width=\"270\" />\r\n    <script>\r\n        $(\'#datepicker\').datepicker({\r\n            uiLibrary: \'bootstrap\'\r\n        });\r\n    </script>\r\n</body>\r\n</html>'),
(25, 'datatable', 'server side rendering\r\nhttps://datatables.net/\r\n\r\nhead\r\n<link rel=\"stylesheet\" href=\" //cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\">\r\n\r\nbody:\r\n<table class=\"table\">\r\n   <thead>\r\n      <tr>\r\n         <th>A</th>\r\n      </tr>\r\n   </thead>   \r\n</table>\r\n\r\n<script type=\"text/javascript\" src=\"include/dataTables.min.js\"></script>\r\n\r\n<script type=\"text/javascript\" src=\"include/dataTables.min.js\"></script>\r\n\r\nend body:\r\n\r\n<script type=\"text/javascript\">\r\n   $(\'.table\').DataTable({\r\n      \"lengthMenu\": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, \"All\"] ]\r\n   });\r\n</script>\r\n\r\n<script type=\"text/javascript\">\r\n   \r\n   $(document).ready( function () {\r\n      $(\'.table\').DataTable();\r\n   } );\r\n\r\n   $(\'.table\').dataTable( {\r\n     \"pageLength\": 4\r\n   } );\r\n</script>'),
(26, 'datatable order by', ' // datatable order by\r\n         // https://datatables.net/reference/api/order()\r\n<script>\r\n         var table = $(\'.table\').DataTable();\r\n \r\n         // Sort by column 1 and then re-draw\r\n         table\r\n             .order( [ 0, \'desc\' ] )      //[ 0, \'asc\' ], [ 1, \'asc\' ] ist part work properly, \r\n             .draw();                     // 0, 1, 2 colum number\r\n\r\n</script>');

-- --------------------------------------------------------

--
-- Table structure for table `softwere`
--

CREATE TABLE `softwere` (
  `id` int(30) NOT NULL,
  `item` varchar(200) NOT NULL,
  `code` varchar(60000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softwere`
--

INSERT INTO `softwere` (`id`, `item`, `code`) VALUES
(1, 'chrome speed', 'cmd/open with administory\r\n\r\n***********\r\n1) C:Windowssystem32>ipconfig /flushdns\r\n2) C:Windowssystem32>netsh winsock reset\r\n3) C:Windowssystem32>exit'),
(2, 'laragon setup', 'laragon: https://laragon.org/download/index.html\r\nphpMyAdmin : https://www.phpmyadmin.net/\r\n\r\nNow if you want to use phpMyAdmin in Laragon \r\nplease follow below steps:\r\n\r\n1) Download latest phpMyAdmin zip file.\r\n2) Extract to path/to/laragon/etc/apps\r\n    Example: C:laragonetcapps\r\n3) The folder name must be phpMyAdmin\r\n4) Restart Laragon must.\r\n\r\nphpmyadmin\r\nusername= root\r\npassword= \"\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_type`
--
ALTER TABLE `code_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `github`
--
ALTER TABLE `github`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js`
--
ALTER TABLE `js`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel`
--
ALTER TABLE `laravel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linux`
--
ALTER TABLE `linux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mysql`
--
ALTER TABLE `mysql`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softwere`
--
ALTER TABLE `softwere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `code_type`
--
ALTER TABLE `code_type`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `github`
--
ALTER TABLE `github`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `js`
--
ALTER TABLE `js`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `laravel`
--
ALTER TABLE `laravel`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `linux`
--
ALTER TABLE `linux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mysql`
--
ALTER TABLE `mysql`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `softwere`
--
ALTER TABLE `softwere`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
