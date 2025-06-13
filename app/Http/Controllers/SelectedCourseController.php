<?php
// Controller: SelectedCourseController.php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SelectedCourseController extends Controller
{
    public function index()
    {
        // Recently viewed
        $recentlyViewedNames = [
            'Google AI Essentials',
            'IBM Data Science',
            'Google Prompting Essentials',
            'Google IT Support',
            'Google IT Automation with Python',
            'Introduction to Generative AI Learning Path',
            'IT Support Google'
        ];

        // Most popular
        $mostPopularNames = [
            'Google AI Essentials',
            'IBM Data Science',
            'Google Prompting Essentials',
            'Google IT Support',
            'Google IT Automation with Python',
            'Introduction to Generative AI Learning Path',
            'IT Support Google',
            'Google Project Management',
            'Google Digital Marketing & E-commerce',
            'Google UX Design',
            'Machine Learning',
            'Deep Learning',
            'Finance & Quantitative Modeling for Analysts',
            'Python for Everybody',
            'IBM Data Analyst',
            'Google Cloud Database Engineer',
            'Applied Data Science with Python',
            'Data Science',
            'Preparing for Google Cloud Certification: Cloud DevOps Engineer',
            'Preparing for Google Cloud Certification: Cloud Engineer',
            'Preparing for Google Cloud Certification: Cloud Developer',
            'Preparing for Google Cloud Certification: Cloud Architect'
        ];

        $personalized = [ // dari gambar
            'Google Cybersecurity',
            'Introduction to Generative AI Learning Path',
            'Google IT Automation with Python',
            'Google Data Analytics',
            'Microsoft Cybersecurity Analyst',
            'Google IT Support',
            'Google Project Management',
            'Microsoft Python Development',
            'Prompt Engineering',
            'Google Digital Marketing & E-commerce',
            'Google Business Intelligence',
            'Python for Everybody',
            'Google UX Design',
            'Microsoft Azure Security Engineer Associate (AZ-500)',
            'Google Advanced Data Analytics',
            'IBM Cybersecurity Analyst',
            'AWS Fundamentals',
            'Microsoft Power BI Data Analyst',
            'IBM Generative AI Engineering',
            'Gemini for Google Workspace'
        ];

        $explore = [
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        ];

        $best = [
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        ];

           $free = [
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        ];

        // Query for both sets
        
        // SQL Query untuk Recently Viewed Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'Google AI Essentials',
            'IBM Data Science',
            'Google Prompting Essentials',
            'Google IT Support',
            'Google IT Automation with Python',
            'Introduction to Generative AI Learning Path',
            'IT Support Google'
        );
        */
        $recentCourses = Course::whereIn('name', $recentlyViewedNames)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        // SQL Query untuk Most Popular Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'Google AI Essentials',
            'IBM Data Science',
            'Google Prompting Essentials',
            'Google IT Support',
            'Google IT Automation with Python',
            'Introduction to Generative AI Learning Path',
            'IT Support Google',
            'Google Project Management',
            'Google Digital Marketing & E-commerce',
            'Google UX Design',
            'Machine Learning',
            'Deep Learning',
            'Finance & Quantitative Modeling for Analysts',
            'Python for Everybody',
            'IBM Data Analyst',
            'Google Cloud Database Engineer',
            'Applied Data Science with Python',
            'Data Science',
            'Preparing for Google Cloud Certification: Cloud DevOps Engineer',
            'Preparing for Google Cloud Certification: Cloud Engineer',
            'Preparing for Google Cloud Certification: Cloud Developer',
            'Preparing for Google Cloud Certification: Cloud Architect'
        );
        */
        $popularCourses = Course::whereIn('name', $mostPopularNames)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        // SQL Query untuk Personalized Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'Google Cybersecurity',
            'Introduction to Generative AI Learning Path',
            'Google IT Automation with Python',
            'Google Data Analytics',
            'Microsoft Cybersecurity Analyst',
            'Google IT Support',
            'Google Project Management',
            'Microsoft Python Development',
            'Prompt Engineering',
            'Google Digital Marketing & E-commerce',
            'Google Business Intelligence',
            'Python for Everybody',
            'Google UX Design',
            'Microsoft Azure Security Engineer Associate (AZ-500)',
            'Google Advanced Data Analytics',
            'IBM Cybersecurity Analyst',
            'AWS Fundamentals',
            'Microsoft Power BI Data Analyst',
            'IBM Generative AI Engineering',
            'Gemini for Google Workspace'
        );
        */
        $personalizedCourses = Course::whereIn('name', $personalized)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        // SQL Query untuk Explore Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        );
        */
        $exploreCourses = Course::whereIn('name', $explore)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        // SQL Query untuk Best Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        );
        */
        $bestCourses = Course::whereIn('name', $best)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        // SQL Query untuk Free Courses:
        /*
        SELECT id, name, image, description, rating, duration_r, institution, institution_logo, kategori 
        FROM courses 
        WHERE name IN (
            'The Bits and Bytes of Computer Networking',
            'Microsoft IT Support Specialist',
            'Google Business Intelligence',
            'System Administration and IT Infrastructure Services',
            'Google Advanced Data Analytics',
            'Preparation for CompTIA A+ Certification',
            'Operating Systems and You: Becoming a Power User',
            'Google IT Automation with Python',
            'Microsoft Excel',
            'Core 1: Hardware and Network Troubleshooting',
            'Foundations of Business Intelligence',
            'Introduction to Computers',
            'Microsoft Cybersecurity Analyst',
            'Microsoft 365 Fundamentals',
            'IBM IT Support',
            'IT Security: Defense against the digital dark arts',
            'Microsoft Cloud Support Associate',
            'IBM Data Engineering',
            'Unilever Supply Chain Data Analyst',
            'Master Microsoft Office 365 and Power Platform'
        );
        */
        $freeCourses = Course::whereIn('name', $free)
            ->select(['id', 'name', 'image', 'description', 'rating', 'duration_r', 'institution', 'institution_logo', 'kategori'])
            ->get();

        return view('pages.detail.courses_detail', compact('recentCourses', 'popularCourses', 'personalizedCourses', 'exploreCourses','bestCourses','freeCourses'));
    }
}