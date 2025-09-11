<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Admin Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold text-primary-600">
                        Admin Dashboard
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        Dashboard
                    </a>
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 transition-colors duration-200">
                        View Site
                    </a>
                    <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                        <span class="text-primary-600 text-sm font-semibold">JD</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-4">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="text-gray-500 hover:text-gray-700">Dashboard</a>
                        </li>
                        <li>
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li>
                            <span class="text-gray-500">Create Project</span>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl font-bold text-gray-900 mt-4">Create New Project</h1>
                <p class="text-gray-600 mt-2">Add a new project to showcase your work.</p>
            </div>
            
            <!-- Form -->
            <div class="card p-8">
                <form action="{{ route('admin.project.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Project Title</label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{ old('title') }}"
                               required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200"
                               placeholder="Enter project title">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea id="description" 
                                  name="description" 
                                  rows="6" 
                                  required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200 resize-none"
                                  placeholder="Describe your project, technologies used, and key features...">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image URL (Optional)</label>
                        <input type="url" 
                               id="image" 
                               name="image" 
                               value="{{ old('image') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200"
                               placeholder="https://example.com/image.jpg">
                        <p class="mt-1 text-sm text-gray-500">Enter a URL for the project screenshot or image. If left empty, a gradient placeholder will be used.</p>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="link" class="block text-sm font-medium text-gray-700 mb-2">Project Link (Optional)</label>
                        <input type="url" 
                               id="link" 
                               name="link" 
                               value="{{ old('link') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200"
                               placeholder="https://github.com/username/project or https://project-demo.com">
                        <p class="mt-1 text-sm text-gray-500">Link to the live project, GitHub repository, or demo.</p>
                        @error('link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Preview Section -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Preview</h3>
                        <div id="projectPreview" class="card max-w-md group overflow-hidden">
                            <div id="previewImage" class="h-48 bg-gradient-to-br from-primary-400 to-primary-600 flex items-center justify-center">
                                <span id="previewImageText" class="text-white text-lg font-semibold">Project Title</span>
                            </div>
                            <div class="p-6">
                                <h3 id="previewTitle" class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-200">
                                    Project Title
                                </h3>
                                <p id="previewDescription" class="text-gray-600 mb-4">
                                    Enter a description to see the preview...
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500" id="previewDate">
                                        {{ now()->format('M d, Y') }}
                                    </span>
                                    <span id="previewLink" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium text-sm hidden">
                                        View Project
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.dashboard') }}" class="btn-secondary">
                            Cancel
                        </a>
                        <button type="submit" class="btn-primary">
                            Create Project
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Live preview functionality
        const titleInput = document.getElementById('title');
        const descriptionInput = document.getElementById('description');
        const imageInput = document.getElementById('image');
        const linkInput = document.getElementById('link');
        
        const previewTitle = document.getElementById('previewTitle');
        const previewDescription = document.getElementById('previewDescription');
        const previewImage = document.getElementById('previewImage');
        const previewImageText = document.getElementById('previewImageText');
        const previewLink = document.getElementById('previewLink');
        
        function updatePreview() {
            // Update title
            const title = titleInput.value || 'Project Title';
            previewTitle.textContent = title;
            previewImageText.textContent = title;
            
            // Update description
            const description = descriptionInput.value || 'Enter a description to see the preview...';
            previewDescription.textContent = description.length > 100 ? description.substring(0, 100) + '...' : description;
            
            // Update image
            const imageUrl = imageInput.value;
            if (imageUrl) {
                previewImage.style.backgroundImage = `url(${imageUrl})`;
                previewImage.style.backgroundSize = 'cover';
                previewImage.style.backgroundPosition = 'center';
                previewImageText.style.display = 'none';
            } else {
                previewImage.style.backgroundImage = '';
                previewImage.style.backgroundSize = '';
                previewImage.style.backgroundPosition = '';
                previewImageText.style.display = 'block';
            }
            
            // Update link
            const link = linkInput.value;
            if (link) {
                previewLink.classList.remove('hidden');
            } else {
                previewLink.classList.add('hidden');
            }
        }
        
        titleInput.addEventListener('input', updatePreview);
        descriptionInput.addEventListener('input', updatePreview);
        imageInput.addEventListener('input', updatePreview);
        linkInput.addEventListener('input', updatePreview);
    </script>
</body>
</html>