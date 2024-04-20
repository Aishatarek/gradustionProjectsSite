<?php

class Projects
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function getData()
    {
        $result = $this->db->con->query("SELECT * FROM projects ORDER BY id DESC");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function getDataa()
    {
        $result = $this->db->con->query("SELECT * FROM projects WHERE approved='1' ORDER BY id DESC");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    public function addProjects($name, $user_id, $college, $team_name, $field, $supervisor_name, $gpa, $report, $github_link, $important_topics, $approved)
    {
        if ($user_id == 0) {
            function img($img)
            {
                if (isset($img) && $img["error"] == 0) {
                    $allowed = array("webp" => "image/webp", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "rar" => "application/rar", "pdf" => "application/pdf", "xml" => "application/xml");
                    $filename = rand(0, 1000) . $img["name"];
                    $filetype = $img["type"];
                    $filesize = $img["size"];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                    $maxsize = 5 * 1024 * 1024;
                    if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    if (in_array($filetype, $allowed)) {
                        if (file_exists("../../uploads/projects/" . $filename)) {
                            echo $filename . " is already exists.";
                        } else {
                            $result = move_uploaded_file($img["tmp_name"], "../../uploads/projects/" . $filename);
                        }
                    } else {
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                    if ($result) {
                        return "'" . $filename . "'";
                    } else {
                        echo "Error: " . $img["error"];
                    }
                }
            }
            $report = img($report);
            $params = array(
                "name" => $name,
                "user_id" => $user_id,
                "college" => $college,
                "team_name" => $team_name,
                "field" => $field,
                "supervisor_name" => $supervisor_name,
                "gpa" => $gpa,
                "report" => $report,
                "github_link" => $github_link,
                "important_topics" => $important_topics,
                "approved" => $approved
            );
            $this->insertIntoProjects($params);
        } else {
            $sqll = "SELECT * FROM projects WHERE user_id=$user_id";
            $resultt =  $this->db->con->query($sqll);
            if ($resultt->num_rows > 0) {
                $row = mysqli_fetch_assoc($resultt);
                if ($row['id'] > 0 && $user_id > 0) {
                    echo "<script>alert('You Have Already Added Your Project')</script>";
                } else {
                    function img($img)
                    {
                        if (isset($img) && $img["error"] == 0) {
                            $allowed = array("webp" => "image/webp", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "rar" => "application/rar", "pdf" => "application/pdf", "xml" => "application/xml");
                            $filename = rand(0, 1000) . $img["name"];
                            $filetype = $img["type"];
                            $filesize = $img["size"];
                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                            if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                            $maxsize = 5 * 1024 * 1024;
                            if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                            if (in_array($filetype, $allowed)) {
                                if (file_exists("../../uploads/projects/" . $filename)) {
                                    echo $filename . " is already exists.";
                                } else {
                                    $result = move_uploaded_file($img["tmp_name"], "../../uploads/projects/" . $filename);
                                }
                            } else {
                                echo "Error: There was a problem uploading your file. Please try again.";
                            }
                            if ($result) {
                                return "'" . $filename . "'";
                            } else {
                                echo "Error: " . $img["error"];
                            }
                        }
                    }
                    $report = img($report);
                    $params = array(
                        "name" => $name,
                        "user_id" => $user_id,
                        "college" => $college,
                        "team_name" => $team_name,
                        "field" => $field,
                        "supervisor_name" => $supervisor_name,
                        "gpa" => $gpa,
                        "report" => $report,
                        "github_link" => $github_link,
                        "important_topics" => $important_topics,
                        "approved" => $approved
                    );
                    $this->insertIntoProjects($params);
                }
            } else {
                function img($img)
                {
                    if (isset($img) && $img["error"] == 0) {
                        $allowed = array("webp" => "image/webp", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "rar" => "application/rar", "pdf" => "application/pdf", "xml" => "application/xml");
                        $filename = rand(0, 1000) . $img["name"];
                        $filetype = $img["type"];
                        $filesize = $img["size"];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
                        $maxsize = 5 * 1024 * 1024;
                        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                        if (in_array($filetype, $allowed)) {
                            if (file_exists("./uploads/projects/" . $filename)) {
                                echo $filename . " is already exists.";
                            } else {
                                $result = move_uploaded_file($img["tmp_name"], "./uploads/projects/" . $filename);
                            }
                        } else {
                            echo "Error: There was a problem uploading your file. Please try again.";
                        }
                        if ($result) {
                            return "'" . $filename . "'";
                        } else {
                            echo "Error: " . $img["error"];
                        }
                    }
                }
                $report = img($report);
                $params = array(
                    "name" => $name,
                    "user_id" => $user_id,
                    "college" => $college,
                    "team_name" => $team_name,
                    "field" => $field,
                    "supervisor_name" => $supervisor_name,
                    "gpa" => $gpa,
                    "report" => $report,
                    "github_link" => $github_link,
                    "important_topics" => $important_topics,
                    "approved" => $approved
                );
                $this->insertIntoProjects($params);
                header("Refresh:0");
                $sqlll = "SELECT * FROM projects WHERE user_id='$user_id'";
                $resulttt =  $this->db->con->query($sqlll);
                if ($resulttt->num_rows > 0) {
                    $row = mysqli_fetch_assoc($resulttt);
                    $item_id = $row['id'];
                }

                $this->db->con->query("UPDATE users SET project_id={$item_id} WHERE id={$user_id}");
                $_SESSION['project_id'] = $item_id;

                header("Location: popup.php");
            }
        }
    }

    public function insertIntoProjects($params = null, $table = "projects")
    {
        if ($this->db->con != null) {
            if ($params != null) {
                $columns = implode(',', array_keys($params));
                $values = implode(',', array_values($params));
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
                $result = $this->db->con->query($query_string);

                return $result;
            }
        }
    }
    public function deleteProjects($item_id = null)
    {
        if ($item_id != null) {
            $this->db->con->query("UPDATE users SET project_id='0' WHERE project_id={$item_id}");
            $this->db->con->query("DELETE FROM projects WHERE id={$item_id}");
        }
    }
    public function updateprojects($item_id = null, $name, $user_id, $college, $team_name, $field, $supervisor_name, $gpa, $report, $github_link, $important_topics, $approved)
    {
        if ($item_id != null) {
            function img($img)
            {
                if (isset($img) && $img["error"] == 0) {
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "rar" => "application/rar", "pdf" => "application/pdf");
                    $filename = rand(0, 1000) . $img["name"];
                    $filetype = $img["type"];
                    $filesize = $img["size"];
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if (!array_key_exists($ext, $allowed)) {
                        die("Error: Please select a valid file format.");
                    } else {
                        $filename = rand(0, 100000) . "project." . $ext;
                    }
                    $maxsize = 5 * 1024 * 1024;
                    if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
                    if (in_array($filetype, $allowed)) {
                        if (file_exists("../../uploads/projects/" . $filename)) {
                            echo $filename . " is already exists.";
                        } else {

                            $result = move_uploaded_file($img["tmp_name"], "../../uploads/projects/" . $filename);
                        }
                    } else {
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                    if ($result) {
                        return "'" . $filename . "'";
                    } else {
                        echo "Error: " . $img["error"];
                    }
                }
            }
            $this->db->con->query("UPDATE projects SET name={$name},user_id={$user_id} ,college={$college},team_name={$team_name},field={$field},supervisor_name={$supervisor_name},gpa={$gpa},approved={$approved},github_link={$github_link},important_topics={$important_topics} WHERE id={$item_id}");
            if (isset($report) && isset($report['name'])) {
                $report = img($report);
                $this->db->con->query("UPDATE projects SET report={$report} WHERE id={$item_id}");
            }
        }
    }
    public function Approve($item_id = null,  $approved)
    {
        if ($item_id != null) {

            if ($approved == "'2'") {
                $this->db->con->query("UPDATE users SET project_id='0' WHERE project_id={$item_id}");
                $this->db->con->query("UPDATE projects SET approved={$approved} , user_id='0' WHERE id={$item_id}");
                header("Location: displayProjects.php");
            } elseif ($approved == "'1'") {
                $this->db->con->query("UPDATE projects SET approved=1 WHERE id={$item_id}");
                header("Location: displayProjects.php");
            }
        }
    }
}
