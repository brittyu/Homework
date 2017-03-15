syntax on
set nocompatible
filetype off

set rtp+=~/.vim/bundle/Vundle.vim/
call vundle#begin()

Plugin 'gmarik/Vundle.vim'
Plugin 'scrooloose/nerdcommenter'
Plugin 'scrooloose/nerdtree'
Plugin 'vim-scripts/taglist.vim'
Plugin 'mattn/emmet-vim'
Plugin 'Valloric/YouCompleteMe'
Plugin 'plasticboy/vim-markdown'
Plugin 'altercation/vim-colors-solarized'
Plugin 'vim-scripts/DoxygenToolkit.vim'
Plugin 'vim-scripts/Rainbow-Parenthesis.git'
Plugin 'Lokaltog/vim-easymotion'
Plugin 'junegunn/vim-easy-align'
Plugin 'Raimondi/delimitMate'
Plugin 'kien/ctrlp.vim'
Plugin 'scrooloose/syntastic'
Plugin 'jiangmiao/auto-pairs'
Plugin 'Lokaltog/vim-powerline'

call vundle#end()
filetype plugin indent on

set ic

set tabstop=4
set softtabstop=4
set shiftwidth=4
set expandtab

set showcmd

set autoindent
" set rnu
set nu
set mousehide
set encoding=utf-8
set ts=4

set foldenable
set foldlevelstart=10
set foldmethod=indent
set foldnestmax=10

set cindent
set wrap
set pastetoggle=<F2>
set laststatus=2
" 增强模式补齐操作
set wildmenu
set showmatch

set incsearch
set hlsearch

let mapleader=","
let g:mapleader=","
nnoremap <leader><space> :nohlsearch<CR>

" dox configure
let g:DoxygenToolkit_briefTag_pre="@Synopsis  "
let g:DoxygenToolkit_paramTag_pre="@Param "
let g:DoxygenToolkit_returnTag="@Returns   "
let g:DoxygenToolkit_blockHeader="--------------------------------------------------------------------------"
let g:DoxygenToolkit_blockFooter="----------------------------------------------------------------------------"
let g:DoxygenToolkit_authorName="brittyu"

" easy align configure
vmap <Leader>a <Plug>(EasyAlign)
nmap <Leader>a <Plug>(EasyAlign)

autocmd BufNewFile *.sh,*.py exec ":call AutoSetFileHead()"
function! AutoSetFileHead()
    "如果文件类型为.sh文件
    if &filetype == 'sh'
        call setline(1, "\#!/bin/bash")
    endif

    "如果文件类型为python
    if &filetype == 'python'
        call setline(1, "\#!/usr/bin/env python")
        call append(1, "\# encoding: utf-8")
    endif

    normal G
    normal o
    normal o
endfunc

if has("autocmd")
    autocmd FileType javascript setlocal ts=2 sw=2 expandtab
    autocmd FileType html setlocal ts=2 sw=2 expandtab
    autocmd FileType css setlocal ts=2 sw=2 expandtab
    autocmd FileType ruby setlocal ts=2 sw=2 expandtab
    autocmd FileType r setlocal ts=2 sw=2 expandtab
end

hi CursorLine cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white
hi CursorColumn cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white

colorscheme desert

" 第80列高亮
set cc=81
