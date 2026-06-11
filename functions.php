<?php



function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}


function renderTutors($tutorsList) {
    foreach ($tutorsList as $tutor) {
        echo '
        <div class="tutor-card">
            <div class="tutor-image">
                <img src="' . htmlspecialchars($tutor['image']) . '" alt="' . htmlspecialchars($tutor['name']) . '">
            </div>
            <div class="tutor-info">
                <h3>' . htmlspecialchars($tutor['name']) . '</h3>
                <p class="subject">' . htmlspecialchars($tutor['subject']) . '</p>
                <p class="bio">' . htmlspecialchars($tutor['bio']) . '</p>
            </div>
        </div>';
    }
}


function renderCourses($coursesList) {
    foreach ($coursesList as $course) {
        echo '
        <a href="#" class="course-card">
            <span>' . $course['icon'] . ' ' . htmlspecialchars($course['name']) . '</span>
        </a>';
    }
}