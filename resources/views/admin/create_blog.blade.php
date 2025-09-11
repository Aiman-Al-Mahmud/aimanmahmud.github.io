<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post - Admin</title>
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
                            <span class="text-gray-500">Create Blog Post</span>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-3xl font-bold text-gray-900 mt-4">Create New Blog Post</h1>
                <p class="text-gray-600 mt-2">Share your knowledge and insights with your audience.</p>
            </div>
            
            <!-- Form -->
            <div class="card p-8">
                <form action="{{ route('admin.blog.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Blog Title</label>
                        <input type="text" 
                               id="title" 
                               name="title" 
                               value="{{ old('title') }}"
                               required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200"
                               placeholder="Enter blog post title">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail URL (Optional)</label>
                        <input type="url" 
                               id="thumbnail" 
                               name="thumbnail" 
                               value="{{ old('thumbnail') }}"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200"
                               placeholder="https://example.com/thumbnail.jpg">
                        <p class="mt-1 text-sm text-gray-500">Enter a URL for the blog post thumbnail. If left empty, a default icon will be used.</p>
                        @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                        <div class="mb-2">
                            <div class="flex items-center space-x-2 mb-3 p-3 bg-gray-50 rounded-lg">
                                <span class="text-sm font-medium text-gray-700">Formatting:</span>
                                <button type="button" onclick="insertTag('**', '**')" class="px-2 py-1 text-xs bg-white border border-gray-300 rounded hover:bg-gray-50">
                                    <strong>Bold</strong>
                                </button>
                                <button type="button" onclick="insertTag('*', '*')" class="px-2 py-1 text-xs bg-white border border-gray-300 rounded hover:bg-gray-50">
                                    <em>Italic</em>
                                </button>
                                <button type="button" onclick="insertTag('`', '`')" class="px-2 py-1 text-xs bg-white border border-gray-300 rounded hover:bg-gray-50 font-mono">
                                    Code
                                </button>
                                <button type="button" onclick="insertTag('## ', '')" class="px-2 py-1 text-xs bg-white border border-gray-300 rounded hover:bg-gray-50">
                                    Heading
                                </button>
                                <button type="button" onclick="insertTag('- ', '')" class="px-2 py-1 text-xs bg-white border border-gray-300 rounded hover:bg-gray-50">
                                    List
                                </button>
                            </div>
                        </div>
                        <textarea id="content" 
                                  name="content" 
                                  rows="15" 
                                  required 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors duration-200 resize-none font-mono text-sm"
                                  placeholder="Write your blog post content here. You can use basic markdown formatting:

## Heading
**Bold text**
*Italic text*
`Code snippet`
- List item

Write your thoughts, tutorials, or insights...">{{ old('content') }}</textarea>
                        <p class="mt-2 text-sm text-gray-500">You can use basic markdown formatting in your content.</p>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Preview Section -->
                    <div class="border-t border-gray-200 pt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">Preview</h3>
                            <button type="button" id="togglePreview" onclick="togglePreview()" class="text-primary-600 hover:text-primary-700 text-sm font-medium">
                                Show Preview
                            </button>
                        </div>
                        
                        <div id="blogPreview" class="hidden">
                            <article class="card max-w-2xl overflow-hidden">
                                <div id="previewThumbnail" class="h-64 bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </div>
                                
                                <div class="p-6">
                                    <h3 id="previewTitle" class="text-xl font-semibold text-gray-900 mb-3">
                                        Blog Post Title
                                    </h3>
                                    <div id="previewContent" class="text-gray-600 mb-4 prose prose-sm">
                                        Your content will appear here...
                                    </div>
                                    
                                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center">
                                                <span class="text-primary-600 text-sm font-semibold">JD</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-gray-900">John Doe</p>
                                                <p class="text-xs text-gray-500">{{ now()->format('M d, Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                        <a href="{{ route('admin.dashboard') }}" class="btn-secondary">
                            Cancel
                        </a>
                        <button type="submit" class="btn-primary">
                            Publish Blog Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        // Live preview functionality
        const titleInput = document.getElementById('title');
        const thumbnailInput = document.getElementById('thumbnail');
        const contentInput = document.getElementById('content');
        
        const previewTitle = document.getElementById('previewTitle');
        const previewThumbnail = document.getElementById('previewThumbnail');
        const previewContent = document.getElementById('previewContent');
        
        function updatePreview() {
            // Update title
            const title = titleInput.value || 'Blog Post Title';
            previewTitle.textContent = title;
            
            // Update thumbnail
            const thumbnailUrl = thumbnailInput.value;
            if (thumbnailUrl) {
                previewThumbnail.style.backgroundImage = `url(${thumbnailUrl})`;
                previewThumbnail.style.backgroundSize = 'cover';
                previewThumbnail.style.backgroundPosition = 'center';
                previewThumbnail.innerHTML = '';
            } else {
                previewThumbnail.style.backgroundImage = '';
                previewThumbnail.innerHTML = `
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                `;
            }
            
            // Update content (basic markdown to HTML conversion)
            const content = contentInput.value || 'Your content will appear here...';
            let htmlContent = content
                .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                .replace(/\*(.*?)\*/g, '<em>$1</em>')
                .replace(/`(.*?)`/g, '<code class="bg-gray-100 px-1 rounded">$1</code>')
                .replace(/^## (.*$)/gm, '<h2 class="text-lg font-semibold mt-4 mb-2">$1</h2>')
                .replace(/^- (.*$)/gm, '<li class="ml-4">$1</li>')
                .replace(/\n/g, '<br>');
            
            previewContent.innerHTML = htmlContent;
        }
        
        function togglePreview() {
            const preview = document.getElementById('blogPreview');
            const toggleBtn = document.getElementById('togglePreview');
            
            if (preview.classList.contains('hidden')) {
                preview.classList.remove('hidden');
                toggleBtn.textContent = 'Hide Preview';
                updatePreview();
            } else {
                preview.classList.add('hidden');
                toggleBtn.textContent = 'Show Preview';
            }
        }
        
        function insertTag(startTag, endTag) {
            const textarea = contentInput;
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;
            const selectedText = textarea.value.substring(start, end);
            const newText = startTag + selectedText + endTag;
            
            textarea.setRangeText(newText, start, end, 'end');
            textarea.focus();
            updatePreview();
        }
        
        titleInput.addEventListener('input', updatePreview);
        thumbnailInput.addEventListener('input', updatePreview);
        contentInput.addEventListener('input', updatePreview);
    </script>
</body>
</html>