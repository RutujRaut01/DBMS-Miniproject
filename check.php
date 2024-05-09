
<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "yourai";
    $conn = "";
    try{
        $conn=mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);
    }
    catch(mysqli_sql_exception)
    {
        echo"Error Connecting";
    }
    if($conn)
    {
        echo"";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prompt Generator - YourAI</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }
    header h1 {
        margin: 0;
        font-size: 24px;
    }
    form {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .preferences label {
        display: inline-block;
        margin-right: 10px;
    }
    .preferences input[type="radio"] {
        display: none;
    }
    .preferences label {
        cursor: pointer;
        padding: 8px 16px;
        border-radius: 20px;
        background-color: #eee;
        color: #333;
        transition: background-color 0.3s ease;
    }
    .preferences input[type="radio"]:checked + label {
        background-color: #333;
        color: #fff;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    img{
    height: 150px;
    width: 150px;
    border: 2px solid rgb(214, 195, 255);
    margin: 10px 10px;
   }
   a{
    color: white;
   }
   .output {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   }
</style>
</head>
<body>

<header>
    <a href="./"><h1>YourAI</h1></a>
    <img src="./assets/logo.png" alt="YourAI">
</header>

<form action="promptgenerator.php" method="post">
    <label for="base-question">Base Question:</label>
    <input type="text" id="base-question" name="base-question" placeholder="Enter your base question...">
    
    <fieldset class="preferences">
        <legend>Role Category:</legend>
        <input type="radio" id="advisor" name="role-category" value="advisor">
        <label for="advisor">Advisor</label>
        
        <input type="radio" id="storyteller" name="role-category" value="storyteller">
        <label for="storyteller">Storyteller</label>
        
        <input type="radio" id="teacher" name="role-category" value="teacher">
        <label for="teacher">Teacher</label>
        
        <input type="radio" id="writer" name="role-category" value="writer">
        <label for="writer">Writer</label>
        
        <input type="radio" id="philosopher" name="role-category" value="philosopher">
        <label for="philosopher">Philosopher</label>
        
        <input type="radio" id="expert" name="role-category" value="expert">
        <label for="expert">Expert</label>
    </fieldset>
    
    <fieldset class="preferences">
        <legend>Tone:</legend>
        <input type="radio" id="friendly" name="tone" value="friendly">
        <label for="friendly">Friendly</label>
        
        <input type="radio" id="optimistic" name="tone" value="optimistic">
        <label for="optimistic">Optimistic</label>
        
        <input type="radio" id="witty" name="tone" value="witty">
        <label for="witty">Witty</label>
        
        <input type="radio" id="calm" name="tone" value="calm">
        <label for="calm">Calm</label>
        
        <input type="radio" id="pessimistic" name="tone" value="pessimistic">
        <label for="pessimistic">Pessimistic</label>
    </fieldset>
    
    <fieldset class="preferences">
        <legend>Mood:</legend>
        <input type="radio" id="curious" name="mood" value="curious">
        <label for="curious">Curious</label>
        
        <input type="radio" id="creative" name="mood" value="creative">
        <label for="creative">Creative</label>
        
        <input type="radio" id="humorous" name="mood" value="humorous">
        <label for="humorous">Humorous</label>
        
        <input type="radio" id="motivational" name="mood" value="motivational">
        <label for="motivational">Motivational</label>
    </fieldset>
    
    <fieldset class="preferences">
        <legend>Length:</legend>
        <input type="radio" id="5-lines" name="length" value="5-lines">
        <label for="5-lines">5 lines</label>
        
        <input type="radio" id="10-lines" name="length" value="10-lines">
        <label for="10-lines">10 lines</label>
        
        <input type="radio" id="20-lines" name="length" value="20-lines">
        <label for="20-lines">20 lines</label>
        
        <input type="radio" id="50-lines" name="length" value="50-lines">
        <label for="50-lines">50 lines</label>
    </fieldset>
    
    <fieldset class="preferences">
        <legend>Complexity:</legend>
        <input type="radio" id="very-simple" name="complexity" value="very-simple">
        <label for="very-simple">Very Simple</label>
        
        <input type="radio" id="simple" name="complexity" value="simple">
        <label for="simple">Simple</label>
        
        <input type="radio" id="medium" name="complexity" value="medium">
        <label for="medium">Medium</label>
        
        <input type="radio" id="complex" name="complexity" value="complex">
        <label for="complex">Complex</label>
    </fieldset>
    
    <input type="submit" name="submit" value="Generate Prompt">
</form>


<br><br><br>
<br><br><br>

<footer>
    <a href="./contact.html"><p class="links">Contact Me</p></a>
    <a href="./about.html"><p class="links">About</p></a>
</footer>

</body>
</html>


<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST["submit"]))
{
    // $role_category = $_POST["role-category"];
    // $tone = $_POST["tone"];
    // $mood = $_POST["mood"];
    // $length = $_POST["length"];
    // $complexity = $_POST["complexity"];
    // $base_question = $_POST["base-question"];
   // echo"$role_category<br> $tone <br> $mood <br> $length <br> $complexity <br> $base_question <br>";

   $role_category = isset($_POST["role-category"]) ? mysqli_real_escape_string($conn, $_POST["role-category"]) : "";
    $tone = isset($_POST["tone"]) ? mysqli_real_escape_string($conn, $_POST["tone"]) : "";
    $mood = isset($_POST["mood"]) ? mysqli_real_escape_string($conn, $_POST["mood"]) : "";
    $length = isset($_POST["length"]) ? mysqli_real_escape_string($conn, $_POST["length"]) : "";
    $complexity = isset($_POST["complexity"]) ? mysqli_real_escape_string($conn, $_POST["complexity"]) : "";
    $base_question = isset($_POST["base-question"]) ? mysqli_real_escape_string($conn, $_POST["base-question"]) : "";


    $role_prompt = "";
    $tone_prompt = "";
    $mood_prompt = "";
    $length_prompt = "";
    $complexity_prompt = "";

    if($role_category !== "") {
        $query = "SELECT * FROM prompt_database WHERE prompt_key = '$role_category'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $role_prompt = $row ? $row["prompt_string"] : "";
    }

    if($tone !== "") {
        $query = "SELECT * FROM prompt_database WHERE prompt_key = '$tone'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $tone_prompt = $row ? $row["prompt_string"] : "";
    }

    if($mood !== "") {
        $query = "SELECT * FROM prompt_database WHERE prompt_key = '$mood'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $mood_prompt = $row ? $row["prompt_string"] : "";
    }

    if($length !== "") {
        $query = "SELECT * FROM prompt_database WHERE prompt_key = '$length'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $length_prompt = $row ? $row["prompt_string"] : "";
    }

    if($complexity !== "") {
        $query = "SELECT * FROM prompt_database WHERE prompt_key = '$complexity'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $complexity_prompt = $row ? $row["prompt_string"] : "";
    }
    //echo"$role_prompt <br><br> $tone_prompt <br><br> $mood_prompt <br><br> $length_prompt <br><br> $complexity_prompt <br><br>";
    // $preferences = $role_prompt.", ".$tone_prompt.", ".$mood_prompt.", ".$length_prompt.", ".$complexity_prompt;
    $preferences_json = json_encode([$role_category, $tone, $mood, $length, $complexity]);
    
    $prompt= $role_prompt.$tone_prompt.$mood_prompt.$length_prompt.$complexity_prompt.$base_question;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="output">
    <p>Generated Prompt:</p>
    <p><?php echo $prompt; ?></p>
    </div>
    <br><br><br><br><br><br>
</body>
</html>


<?php
error_reporting(E_ERROR | E_PARSE);
$preferences_json_escaped = mysqli_real_escape_string($conn, $preferences_json);
$prompt_escaped = mysqli_real_escape_string($conn, $prompt);
$base_question_escaped = mysqli_real_escape_string($conn, $base_question);


$sql = "INSERT INTO prompt_history(base_question,preferences,prompt)
        VALUES ('$base_question_escaped','$preferences_json_escaped','$prompt_escaped')";



mysqli_query($conn,$sql);

mysqli_close($conn);
?>





<?php
// Define your OpenAI API key
$openai_api_key = "sk-proj-psmyYI6dYbENLz7tMD4dT3BlbkFJ9d1NDzAkwlKiQSaRG9n1";

// Define the prompt to send to ChatGPT
$prompt = $prompt_escaped;

// Set up the request to the OpenAI API
$request_data = json_encode(array(
    "prompt" => $prompt,
    "max_tokens" => 150,  // Adjust as needed
    "temperature" => 0.7, // Adjust as needed
    "n" => 1,             // Number of responses
    "stop" => "\n"
));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/completions");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer " . $openai_api_key
));

// Send the request to the OpenAI API
$response = curl_exec($ch);
curl_close($ch);

// Parse the response
if ($response === false) {
    // Handle error
} else {
    $response_data = json_decode($response, true);
    $generated_text = $response_data['choices'][0]['text']; // Extract the generated text
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Prompt</title>
</head>
<body>
    <div class="output">
        <p>Generated Prompt:</p>
        <p><?php echo $prompt; ?></p>
        <p>Generated Output:</p>
        <p><?php echo $generated_text; ?></p>
    </div>
    <br><br><br><br><br><br>
</body>
</html>
