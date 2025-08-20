<?php
/**
 * API Helper functions for fetching course data
 */

/**
 * Fetches all courses data from the API
 * 
 * @return array The courses data array
 */
function fetchCoursesData() {
    $api_url = 'https://68a3f814c123272fb9b0e42d.mockapi.io/Courses';
    
    // Initialize cURL session
    $ch = curl_init($api_url);
    
    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For development only
    
    // Execute cURL request
    $response = curl_exec($ch);
    
    // Check for errors
    if (curl_errno($ch)) {
        error_log('API Request Error: ' . curl_error($ch));
        curl_close($ch);
        return ['courses' => []]; // Return empty courses array on error
    }
    
    // Close cURL session
    curl_close($ch);
    
    // Decode JSON response
    $courses = json_decode($response, true);
    
    // If JSON decoding fails or response is not an array, return empty array
    if (!is_array($courses)) {
        error_log('API Response Error: Invalid JSON format');
        return ['courses' => []];
    }
    
    // Return in the same format as the original JSON file
    return ['courses' => $courses];
}

/**
 * Finds a specific course by ID
 * 
 * @param string $courseId The course ID to find
 * @return array|null The course data or null if not found
 */
function findCourseById($courseId) {
    $data = fetchCoursesData();
    $courses = $data['courses'] ?? [];
    
    foreach ($courses as $course) {
        if ($course['id'] === $courseId) {
            return $course;
        }
    }
    
    return null;
}