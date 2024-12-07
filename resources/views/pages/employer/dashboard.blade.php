@extends('layout.employer.employer_layout')

@section('content')

<div style="flex-grow: 1; background: linear-gradient(135deg, #ff758c, #ff7eb3); padding: 50px;">
        <!-- Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="font-size: 3rem; font-weight: bold; color: #333;">Welcome to Your Dashboard</h1>
            <p style="font-size: 1.2rem; color: #444;">Manage your activities and track your progress effortlessly.</p>
        </div>

        <!-- Main Actions -->
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px;">
            <div style="background: rgba(255, 255, 255, 0.3); padding: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; flex: 1; max-width: 300px;">
                <h2 style="font-size: 1.5rem; color: #333;">Post a Job</h2>
                <p style="font-size: 1rem; color: #555;">Share your job openings with the right candidates.</p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.3); padding: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; flex: 1; max-width: 300px;">
                <h2 style="font-size: 1.5rem; color: #333;">Browse Candidates</h2>
                <p style="font-size: 1rem; color: #555;">Find and explore the best talents for your company.</p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.3); padding: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; flex: 1; max-width: 300px;">
                <h2 style="font-size: 1.5rem; color: #333;">Applications</h2>
                <p style="font-size: 1rem; color: #555;">Review and manage all your job applications.</p>
            </div>
        </div>

        <!-- Extra Features -->
        <div style="margin-top: 40px; display: flex; justify-content: space-around; flex-wrap: wrap; gap: 20px;">
            <!-- Statistics -->
            <div style="flex: 1; max-width: 48%; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 20px;">Statistics</h2>
                <p style="color: #444; font-size: 1rem;">Track your progress with detailed statistics.</p>
            </div>

            <!-- Quick Links -->
            <div style="flex: 1; max-width: 48%; background: rgba(255, 255, 255, 0.2); padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 20px;">Quick Links</h2>
                <p style="color: #444; font-size: 1rem;">Access all your tools and settings easily from here.</p>
            </div>
        </div>
    </div>


@endsection