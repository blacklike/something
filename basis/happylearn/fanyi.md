# 你需要知道关于CSS will-change属性
- ### 介绍
> 如果你曾注意过WebKit浏览器上“ficker”的一些CSS操作，尤其是变换和动画，你可能会在之前发现硬件加速了。
- ### CPU,GPU和硬件加速
>   简单来说，硬件加速意味着Graphics Processing Unit(GPU)将会通过代替Central Processing Unit(CPU)做一些比较大负荷的事情，从而来协助你的浏览器渲染页面，当CSS操作硬件加速时，通常你会发现渲染页面的速度变快了。
>   
>   顾名思义，CPU和GPU都是计算机处理单元。CPU位于电脑的主板，它几乎处理控制着电脑里面的一切，有着计算机大脑之称。GPU位于电脑显卡上的图形卡，负责处理和渲染图片的。此外，GPU特殊的设计，使其专为渲染图片所需要的复杂数学和几何计算。因此，卸载运行到GPU上能获得显著的性能提高并且也能减少CPU在移动设备上的争用。
>   
>   硬件加速（或者说是GPU加速）依赖于浏览器渲染网页时使用layering model。当特定的操作（比如说3D变换）作用于一个网页的元素上，这个元素移动到它自己的“layer”上，在这个“layer”里面它能独立的去渲染一个网页并且复合到这个后面（画到这个网页当中）。这种隔离这个渲染内容的方式，以至于网页的其他部分不需要重新渲染而仅仅只是一个元素的变换，那么将会获得显著的速度优势。在这里值得说到的是只有3D变换才有它自己的layer，2D变换是没有的。
>   
>   CSS动画，变换和过渡是不能自动让GPU加速，反而使用网页中的缓慢软件去渲染引擎。然而，有些网页会提供hardware acceleration by means of certain properties来提供更好的渲染性能。比如，opacity这个性能是几个能加速的CSS性能之一，因为GPU可以很简单的处理。基本上，任何层次的透明度的淡出的CSS过渡或者动画，浏览器都会非常机智的扔给GPU使操作运行的非常快速。在所有的CSS属性中，opacity是在使用时最高效并且不会有任何问题的属性之一。除了opacity属性之外另一个同样能使硬件加速的操作就是CSS 3D变换了。
- ### 过去：The translate()(or translate 3d())Hack
> 在相当长的一段时间内，我们都是使用translateZ()(or translate3d())hack(有时候也叫做空变换hack)去骗取浏览器推送我们的动画和变化去触发硬件加速。我们一直做的就是通过在一个元素上添加一个简单的3D变换在一个没有变换过的三维空间内。比如，一个元素可以通过下面这个简单的代码在二维空间实现硬件加速：
> 
>  **Transform:translate3d(0,0,0);**
>  
>  所谓硬件加速就是创建一个被传递并且复合到GPU的处理层的一个操作。然而，在页面中，强制使用hack去创建一个layer终究不是一个正确解决性能颈瓶的方法。正确创建layer的技术能提高页面加载速度，但是它们也是需要付出代价的：它们会占据内存卡和GPU（特别在移动设备上的限制）上的空间并且带来很多坏的影响（尤其是在移动设备上），所以必须小心使用它们，确保这些硬件加速的操作真的能对页面渲染性能有所帮助并且在页面中性能颈瓶不会被另外的操作引起。
>  
>  未来避免创建layer的hacks，一个允许我们提前通知浏览器我们将对一个元素做出一些变化的新的CSS属性，这样浏览器可以优化处理元素渲染的方式，为元素提前准备昂贵的动画处理操作。这个属性就是will-change属性。
- ### 现在：牛逼的will-change属性
> 这个will-change属性允许我们提前通知浏览器我们将对一个元素做出一些变化的操作，因此它会在你需要之前建立一个合适的优化，所以避免对一个页面的加载速度有着负面影响的昂贵启动成本。元素可以更快的被改变，渲染的也更快，这样页面可以快速更新，表现的更加流畅。
> 
> 举个例子，当在一个元素上使用3D Transforms时，这个元素跟它的内容可能会在河道页面之前被创建到我们之前提到的layer。然而，把元素放到新的layer中去是一个多么昂贵的操作，它将会导致一个变换动画延迟一秒钟，引起这种情况的就是“flicker”。
> 
> 为了避免这种延迟，应该要在元素真正改变之前通知浏览器。那样，浏览器就有一定的时间去准备这些变化，以至于当这些元素发生变化的时候，layer已经做好了准备，这样元素可以很快的去渲染页面，页面也可以更快的更新。
> 
> 使用will-change，提示浏览关于即将发生动画很简单，只要在元素上添加一个下面css属性就行了。
> 
> **Will-change:transform;**
> 
> 你也可以告诉浏览器，你打算改变元素的滚动位置，内容，或者多个要改变的性质，只要写出属性的名字就行了。如果你改变的是多个属性的话，需要用逗号分隔开来。比如说，如果你想自己的元素动起来，你可以对浏览器做如下的声明：
> 
> **Will-change:transform,opacity;**
> 
> 声明了你即将要发生的特定的改变，给了浏览器做出一个更好去渲染页面的决定。这个方法很显然是比hacks或者这layer更有效更好。
> 
> #### Will-change对元素的影响就是把提示浏览器应用在改变之前吗？
> 
>  Yes或者no取决于你在浏览器中对这个属性的声明。如果有一些不重要的属性在元素中会有一个叠加，声明是，will-change将会在元素中创建出一个叠加。
>  
>  举个例子，clip-path属性和opacity属性都能在元素里面做一个叠加，当你使用重要的属性时，他们是被允许叠加的。因此，使用这两个其中一个属性时，will-change将在真正变换发生之前创建一个叠加。
>  
>  此外，有些属性还会导致一个包括固定位置元素的块状区域。比如说，一个变换元素创建在包含块状区域所有定位之后，就会设定position:fixed。所以，如果一个属性要创建一个块状元素，就要用will-change声明它，去创建一个固定位置的块状区域。
>  
>  除此之外，will-chang对元素没有直接的影响，它只是提示网页允许这个元素的改变并优化。是不直接影响上面提到的超出叠加的创建以及块状元素的情况下。
- ### 使用will-change：可以以及不可以
> 了解了will-change能做什么，但是他仅仅只是让浏览器上的操作变得流畅吗？谁会不想他们的所有改变都被优化并且有效的实现需求呢？
> 
> 就是如此强大的will-change，它也是跟其他属性权利来源是一样的，如果你不合理的使用will-change，滥用它的话，将会导致你的页面崩溃掉。
> 
> 就跟其他性能一样，will-change也是有副作用的而且还不能直接的显示出来。毕竟，它只是在浏览器后面说着悄悄话，所以使用起来非常棘手。在这里，给出一点小意见当你在使用will-change，来确保你更好的避免这种因为滥用而导致的错误。
- ### 不要滥用will-change去声明太多的变化
> 就像我之前提到的一样，它可能是很有诱惑力，告诉浏览器所有将要发生的操作跟变化并进行优化。所以我们的第一反应应该是去添加下面的代码：
> 
> ***，**
> ***：：before，**
> ***：：after{**
> **Will-change:**
> **}**
> 
> 虽然这个看起来很好，但是确实非常有害的还没有用。不仅所有的关键字都没有用，并且覆盖所有的规则都是没有用的。你会看到浏览器已经尽它所能的去优化操作，所以，这么的精确的告诉它去做事不会真的有什么效果的。事实上，这些做法反而造成了很多的破坏，因为一些优化的操作都有可能被will-change限制，最后会使用大量的计算机资源，当过渡使用时，会导致网页变慢并且奔溃掉。
> 
> 换句话说，一直把浏览器放着提防着会不会发生改变并不是个好主意，并且还会有更大的伤害。所以不要这样做。
- ### 给网页足够的时间工作
> Will-change，顾名思义是要提醒浏览器即将发生变化，而不是正在发生变化。使用will-change，我们要求浏览器重点关注我们声明的元素，我可浏览器有足够的时间去实现这些操作，以至于在发生变化时，这操作不会延迟渲染页面。
> 在一个页面发生变化之前立刻添加will-change是没有什么效果的，还不如不添加。举个例子说，如果一个元素在hover时发生变化，比如这个：
>
> **.element:hover {**
> **will-change: transform;**
> **transition: transform 2s;**
> **transform: rotate(30deg) scale(1.5);** 
> **}**
> 
> 告诉浏览器去优化一个已经发生的变化，这些无用，否定的所有想法都基于will-change。相反的是，你应该找到办法，在变化之前就能预测到，然后被实现。
> 
> 举个例子，如果一个元素在点击时发生改变，就应该在这个网页被hover的时候就有足够时间去优化。这个被用户hover和真正点击的时间就给浏览器有足够的时间去优化操作。因为人们的反应时间是比较慢的，所以实际上是给了浏览器200ms的时间去优化。
> 
> **.element {**
> **/* style rules */**
> **transition: transform 1s ease-out;**
> **}**
> **.element:hover {**
> **will-change: transform;**
> **}**
> **.element:active {** 
> **transform: rotateY(180deg);**
> **}**
> 
> 但是如果你希望发生的是悬停而不是点击呢？像我们之前所描述的是完全没有用的。在这种情况下，它经常会在它发生变化之前就找一些方法去预测变化。比如说，hover在一个变化的祖先元素上可能有足够的时间去优化：
> 
> **.element {**
> **transition: opacity .3s linear;** 
> **}**
> **/* declare changes on the element when the mouse enters / hovers its ancestor */**
> **.ancestor:hover .element {**
> **will-change: opacity;**
> **}** 
> **/* apply change when element is hovered */** 
> **.element:hover {**
> **opacity: .5;** 
> **}**
> 
> 然而，hover的祖先元素也不能表明，这元素一定会有所影响，所以你可以在你的应用程序的视图处在一种活动状态下，去设置will-change，或者如果元素在视口的可视区域正好增加了元素的互相影响。
- ### 变换完成后移除will-change
> 浏览器即将要发生的变化的优化通常是比较昂贵的，就像我们之前提到的，它会占据大连那个的计算机资源。这个计算机通常的操作方法就是一旦移除那些操作它就能回复到普通模式。然而，will-change能重写这个行为，维持优化的时间远远超过这个浏览器其他的行为。
> 
> 因此，你要时刻记住，在元素更改之后移除will-change，让浏览器可以恢复干净的源代码。
> 
> 这个时候我们就需要借助js来实现了：
> 
> **// Rough generic example** 
> **// Get the element that is going to be animated on click, for example var el = document.getElementById('element');** 
> **// Set will-change when the element is hovered el.addEventListener('mouseenter', hintBrowser); el.addEventListener('animationEnd', removeHint);**
> **function hintBrowser() {** 
> **// The optimizable properties that are going to change**
> **// in the animation's keyframes block**
> **this.style.willChange = 'transform, opacity';** 
> **}**
> **function removeHint() {** 
> **this.style.willChange = 'auto';** 
> **}**
> 
> 如果你不熟悉这些的话，你可以点开Craig Buckler曾经写的一篇关于用javascript捕获css动画的文章。这也是一篇关于控制css动画，变换的一些css技巧上的文章，值得一看。
- ### 在样式中要谨慎使用will-change
> 正如我们看到的上一节中，will-change在用于通知这个浏览器元素即将发生变化也不过是几毫秒的时间。这是一个will-change对更改样式好的案例。虽然这里提到设置和取消设置要用到javascript，但是有些情况下设置它的样式还是相符的比较好。
> 
> 有一个例子就是在少数的元素中设置will-change能一次又一次的以精悍的方式相应着用户的交互。限制元素的数量意味着浏览器的优化不会被滥用，因此就不会造成太大的伤害。比如说，用户要求把侧边滑出动画，下面这种方式才是正确的：
> 
> **.sidebar {**
> **will-change: transform;** 
> **}**
> 
> 另一种方法就是使元素几乎不断的改变，就好像响应用户不断的把鼠标移动到屏幕上的元素上去。在这种情况下，只有声明will-change在样式当中价值是好的就行了，因为它准确的描述了元素的定期变化，并且保持着有优化：
> 
> **.annoying-element-stuck-to-the-mouse-cursor {**
> **will-change: left, top;**
> **}**
> 
- ### Will-change属性的值
> Will-change采取的四个可能改变的值：auto,scroll-position,contents和<custom-ident>
> 
> 这个<custom-ident>是用于在一个或者多个你指定变化的名称中。多个属性用逗号分隔。如下：
> 
> **will-change: transform;**
> **will-change: opacity;**
> **will-change: top, left, bottom, right;**
> 
> <custom-ident>的值是用来排除关键字的will-change，none,all,auto,scroll-position和contents，除了这些常见的关键字被排除。所以，就像我们文章一开始提到的，这个will-change：所有的无效声明将被浏览器忽视。
> 
> 1. auto 表示没有明确的意图; 无论是启发式和最优化，用户代理应该应用都和正常情况相同。
> 2. scroll-position 表示开发者期望去在接下来去改变或者有动画应用元素的滚动位置。
> 3. contents 表示开发者期望去在接下来去改变或者有动画应用元素的内容.
> 
> 如上综诉，有一些属性在指定是不会被影响，因浏览器不会为大多数的属性更改执行任何特殊的优化。它仍然安全的指向他们，虽然并没有什么效果。
- ### 浏览器的支持性
> 知道2015年八月，Chrome 36+, Opera 24+, and Firefox 36+都支持will-change的属性。Safari“正在考虑”目前will-change工具和它的边缘列表
- ### 结语
> Will-change可以帮我们摆脱hack的硬件加速，并且着重强调的我们css操作的加速跟优化。但是，能力越大，责任也越大，will-change是这些属性中一个不需要担心就能做出一个非常有效的优化。就这一点，我就要引用Tab Atkins Jr的话，是will-change的编译者。
> 
> 在这个元素发生变化之前对元素设置will-change，并在它停止之后移除它。
#### 谢谢阅读！