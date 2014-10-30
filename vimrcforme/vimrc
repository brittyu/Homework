syntax on
set nocompatible
filetype off

set rtp+=~/.vim/bundle/Vundle.vim/
call vundle#rc()

Bundle 'gmarik/Vundle.vim'
Bundle 'scrooloose/syntastic'
Bundle 'majutsushi/tagbar'
Bundle 'scrooloose/nerdtree'
Bundle 'scrooloose/nerdcommenter'
Bundle 'mattn/emmet-vim'
Bundle 'pangloss/vim-javascript'
Bundle 'skammer/vim-css-color'
Bundle 'plasticboy/vim-markdown'
Bundle 'altercation/vim-colors-solarized'
Bundle 'vim-scripts/DoxygenToolkit.vim'
Bundle 'vim-scripts/Rainbow-Parenthesis.git'
Bundle 'Lokaltog/vim-easymotion'
Bundle 'nathanaelkane/vim-indent-guides'
Bundle 'junegunn/vim-easy-align'
Bundle 'othree/html5.vim'
Bundle 'xhr/vim-io'
Bundle 'adimit/prolog.vim'
Bundle 'Raimondi/delimitMate'
Bundle 'tpope/vim-rails'
Bundle 'slim-template/vim-slim'
Bundle 'kien/ctrlp.vim'
Bundle 'chilicuil/vim-sml-coursera'


set softtabstop=4
set shiftwidth=4
set autoindent
set rnu
set mousehide
set encoding=utf-8
set ts=4
set expandtab
set foldmethod=indent
set cindent
set wrap

filetype plugin indent on

if has("autocmd")
    autocmd FileType javascript setlocal ts=2 sw=2 expandtab
    autocmd FileType html setlocal ts=2 sw=2 expandtab
    autocmd FileType css setlocal ts=2 sw=2 expandtab
    autocmd FileType ruby setlocal ts=2 sw=2 expandtab
    autocmd FileType r setlocal ts=2 sw=2 expandtab
end

"set cuc
"set cul
hi CursorLine cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white
hi CursorColumn cterm=NONE ctermbg=darkred ctermfg=white guibg=darkred guifg=white

"快速编译C程序
map<F5> :call Compile()<CR>
func! Compile()
    if &filetype == 'c'
        exec "w"
        exec "! clear;
        \echo 正在编译: ./% ...;
        \echo ;
        \gcc % -g -o %<.o;
        \echo ;
        \echo 编译完成;"
    endif
endfunc

"按Ctrl－F5 调试当前文件
map <C-F5> :call Debug()<CR>

func! Debug()
    if &filetype == 'c'
        exec "w"
        exec "! clear;
        \ echo 正在编译: ./% ...;
        \ echo ;
        \ gcc % -g -o %<.o;
        \ echo ;
        \ echo 编译完成,开始调试;
        \ gdb %<.o;"
    endif
endfunc

"按F6 执行
map <F6> :call Run()<CR>
func! Run()
if &filetype == 'c'
exec "! clear;
\ ./%<.o;"
endif
endfunc

"插入指定文件
map <F7> :call InsertFile()<CR>
func! InsertFile()
exec "r your_file_path;"
endfunc
let mapleader=","

let g:use_zen_expandabbr_key = '<c-y>'

function! AutoPair(open, close)
    let line = getline('.')
    if col('.') > strlen(line) || line[col('.') - 1] == ' '
        return a:open.a:close."\<ESC>i"
    else
        return a:open
    endif
endf
                    
function! ClosePair(char)
    if getline('.')[col('.') - 1] == a:char
        return "\<Right>"
    else
        return a:char
    endif
endf

set background=dark
colorscheme desert

" 第80列高亮
set cc=81

" DoxygenToolkit config
let g:DoxygenToolkit_briefTag_pre="@synopsis  "
let g:DoxygenToolkit_paramTag_pre="@param "
let g:DoxygenToolkit_returnTag="@returns   "
let g:DoxygenToolkit_authorName="linkkingjay"

set ignorecase smartcase
