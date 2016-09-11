package com.example.framelayout;

import android.content.Context;
import android.graphics.*;
import android.view.View;

public class MeziView extends View{
	
	public float bimX = 0;
	public float bimY = 0;
	
	public MeziView(Context context){
		super(context);
		bimX = 0;
		bimY = 200;
		
	}
	
	// ��дonDraw����
	@Override
	public void onDraw(Canvas canvas){
		super.onDraw(canvas);
		Paint paint = new Paint();
		Bitmap bitmap = BitmapFactory.decodeResource(this.getResources(),R.drawable.logo);
		canvas.drawBitmap(bitmap, bimX, bimY,paint);
		
		// �鿴ͼƬ�Ƿ����
		if ( bitmap.isRecycled()){
			// û�л��վ�ǿ�ƻ���
			bitmap.recycle();
		}
	}
}