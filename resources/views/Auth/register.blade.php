<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lumova — Register</title>
  <link rel="stylesheet" href="auth.css">
</head>
<body>
  <div class="auth-container">
    <h1 class="logo">Lumova</h1>
    <h2>Create Your Account</h2>
    <form class="auth-form">
      <div class="form-group">
        <label>First Name</label>
        <input type="text" placeholder="Enter your first name" required>
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" placeholder="Enter your last name" required>
      </div>

      <div class="form-group">
        <label>Gender</label>
        <select required>
          <option value="">Select gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>Date of Birth</label>
        <input type="date" required>
      </div>

      <div class="form-group">
        <label>Country</label>
        <select required>
          <option value="">Select country</option>
          <option>Uzbekistan</option>
          <option>Kazakhstan</option>
          <option>Kyrgyzstan</option>
          <option>Tajikistan</option>
          <option>Turkmenistan</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>Profile Image (optional)</label>
        <input type="file" accept="image/*">
      </div>

      <div class="form-group">
        <label>Specialization</label>
        <input type="text" placeholder="e.g. Frontend Developer, Designer" required>
      </div>

      <div class="form-group">
        <label>Looking For</label>
        <select multiple>
          <option>CTO</option>
          <option>CEO</option>
          <option>Developer</option>
          <option>Designer</option>
          <option>Marketer</option>
          <option>Investor</option>
        </select>
        <small class="hint">Hold Ctrl (Windows) or Cmd (Mac) to select multiple</small>
      </div>

      <div class="form-group">
        <label>Short Bio</label>
        <textarea placeholder="Write a short bio about yourself..." rows="4" required></textarea>
      </div>

      <button type="submit">Register</button>
    </form>
    <p class="switch">
      Already have an account? <a href="login.html">Login</a>
    </p>
  </div>
</body>
</html>
