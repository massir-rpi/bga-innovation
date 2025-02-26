<?php


// MAIN CODE
if (! isset($argv [1])) {
    echo "Make a project copy by moving files into new project and renaming some known files and strings inside them\n";
    echo "The new project directory must be empty. The name of the new project is the name of the directory. It must be all lowercase.\n";
    echo "usage: bgaprojectrename.php <oldprojectfullpath> <newprojectfullpath>\n";
    exit(0);
}
$oldprojectpath = $argv [1];
$newprojectpath = $argv [2];
$oldprojectname = basename($argv [1]);
$newprojectname = basename($argv [2]);
$res = preg_match( "/^[a-z]+$/", $newprojectname );
if ($res !== 1) {
    echo "Error: new project name can only have [a-z] letters (was $newprojectname)\n";
    exit(1);
}

$subdirs = ["src","modules",".vscode"];

echo "Copying $oldprojectpath => $newprojectpath\n";
copyr($oldprojectpath, $newprojectpath);
echo "$oldprojectname => $newprojectname\n";
replacecontent($newprojectpath);




// UTILS
function replacecontent($newprojectpath) {
    global $oldprojectname;
    global $newprojectname;
    global $subdirs;
    $dir_handle = opendir($newprojectpath);
    while ( $file = readdir($dir_handle) ) {
        if ($file != "." && $file != "..") {
            $path = "$newprojectpath/$file";
            
            if (is_dir($path)) {
                // only some subdirs
                if (array_search($file, $subdirs)!==false) {
                    replacecontent($path);
                }
            } else {
                // file
                $corrfile = $file;
                $corrfile = preg_replace( "/\\b${oldprojectname}\\b/", "${newprojectname}", $corrfile);
                $corrfile = preg_replace( "/\\b${oldprojectname}_${oldprojectname}\\b/", "${newprojectname}_${newprojectname}", $corrfile);
                if ($corrfile != $file) {
                    echo "Renaming $file => $corrfile\n";
                    rename($path,"$newprojectpath/$corrfile");
                    $path="$newprojectpath/$corrfile";
                }
                echo "Replacing string in $corrfile\n";
                
                
                $content = file_get_contents( $path );
                if ($corrfile != $file) {
                    $content = preg_replace( "/\\b${file}\\b/", "${corrfile}", $content);
                }
                
                $content= preg_replace( "/${oldprojectname} implementation/i", "${newprojectname} implementation", $content);
                $content= preg_replace( "/\"bgagame\\.${oldprojectname}\"/", "\"bgagame.${newprojectname}\"", $content);
                $content= preg_replace( "/${oldprojectname}_${oldprojectname}/", "${newprojectname}_${newprojectname}", $content);
                $content= preg_replace( "/action_${oldprojectname}\\b/", "action_${newprojectname}", $content);
                $content= preg_replace( "/\\/${oldprojectname}\\/${oldprojectname}\\//", "/${newprojectname}/${newprojectname}/", $content);
                $content= preg_replace( "/class ${oldprojectname} extends/i", "class $newprojectname extends", $content);
                $content= preg_replace("/game_version_${oldprojectname}/", "game_version_${newprojectname}", $content);
                $content= preg_replace("/${oldprojectname}\.js/i", "${newprojectname}.js", $content);
                $content= preg_replace("/${oldprojectname}\.css/", "${newprojectname}.css", $content);
                $content= preg_replace("/${oldprojectname}\.scss/", "${newprojectname}.scss", $content);
                $content= preg_replace("/${oldprojectname}\.game.php/", "${newprojectname}.game.php", $content);
                $content= preg_replace("/${oldprojectname}\.action.php/", "${newprojectname}.action.php", $content);
                $content= preg_replace("/${oldprojectname} game/i", "${newprojectname} game", $content);
                $content= preg_replace("/bga.${oldprojectname}/", "bga.${newprojectname}", $content);
                $content= preg_replace("/\/${oldprojectname}\//", "/${newprojectname}/", $content);
                $content= preg_replace("/return \"${oldprojectname}\"/", "return \"${newprojectname}\"", $content);
                $content= preg_replace("/\\b${oldprojectname}\.prototype/i", "${newprojectname}.prototype", $content);
                $content= preg_replace("/var ${oldprojectname} =/i", "var ${newprojectname} =", $content);
                $content= preg_replace("/\(${oldprojectname},/i", "(${newprojectname},", $content);
                $content= preg_replace("/function ${oldprojectname}\(/i", "function ${newprojectname}(", $content);
                $content= preg_replace("/return ${oldprojectname};/i", "return ${newprojectname};", $content);
                $content= preg_replace("/new ${oldprojectname}\(/i", "new ${newprojectname}(", $content);
                
                file_put_contents($path,$content);
            }
        }
    }
    closedir($dir_handle);
}

function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, - strlen($haystack)) !== false;
}

function copyr($source, $dest) {
    global $oldprojectname;
    if (!is_dir($dest)) mkdir($dest);
    if (is_dir($source)) {
        $dir_handle = opendir($source);
        while ( $file = readdir($dir_handle) ) {
            if ($file != "." && $file != ".." && $file != ".svn" && $file != ".git"  && $file != "node_modules") {
                if (is_dir($source . "/" . $file)) {
                    if (! is_dir($dest . "/" . $file)) {
                        mkdir($dest . "/" . $file);
                    }
                    copyr($source . "/" . $file, $dest . "/" . $file);
                } else {
                    if (endsWith($file, '.game.php')) {
                        $oldprojectname = preg_replace("/.game.php/", "", $file);
                        echo "Using $oldprojectname as old project name\n";
                    }
                    copy($source . "/" . $file, $dest . "/" . $file);
                }
            }
        }
        closedir($dir_handle);
    } else {
        copy($source, $dest);
    }
}

function endsWith($haystack, $needle) {
	    $length = strlen($needle);
	        return $length === 0 || (substr($haystack, -$length) === $needle);
}
?>
