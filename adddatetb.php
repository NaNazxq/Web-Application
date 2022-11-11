<!DOCTYPE html>
<html>
<body>

<h2>เลือกวันที่เข้าพัก</h2>

<p>The <strong>input type="datetime-local"</strong> specifies a date and time input field, with no time zone.</p>

<form action="/action_page.php">
  <label for="reservetime">วันที่เข้าพัก (date and time):</label>
  <input type="datetime-local" id="reservetime" name="reservetime">
  <input type="submit" value="Submit">
</form>

<p><strong>Note:</strong> type="datetime-local" is not supported in Internet Explorer 11 or prior Safari 14.1.</p>

</body>
</html>
