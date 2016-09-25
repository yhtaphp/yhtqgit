package com.example.imagebutton;

import android.app.Activity;
import android.graphics.ColorMatrixColorFilter;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;
import android.view.View.OnTouchListener;

public class MainActivity extends Activity {
	
	ImageButton imgButton;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		imgButton = (ImageButton)findViewById(R.id.imgButton);
		
		// ����ʱ�Ĺ�����ɫ
		final float CLREA[] = new float[]{
				2,0,0,0,2,
				0,2,0,0,2,
				0,0,2,0,2,
				0,0,0,1,0
		};
		
		// ��������ʱ�Ĺ�����ɫ
		final float CLREA_OVER[] = new float[]{
				1,0,0,0,0,
				0,1,0,0,0,
				0,0,1,0,0,
				0,0,0,1,0
		};
		
		//  ���ñ���ͼƬ
		imgButton.setBackgroundResource(R.drawable.back);
		imgButton.setOnTouchListener(new OnTouchListener() {
			
			@Override
			public boolean onTouch(View v, MotionEvent event) {
				// TODO Auto-generated method stub
				if (event.getAction() == MotionEvent.ACTION_DOWN){
					// ��������ʱ
					v.setBackgroundResource(R.drawable.img);
					// ��ȡ���˾���
					v.getBackground().setColorFilter(new ColorMatrixColorFilter(CLREA));
					v.setBackground(v.getBackground());
				}else if ( event.getAction() == MotionEvent.ACTION_UP){
					//��������ʱ
					// ��������ʱ
					v.setBackgroundResource(R.drawable.img2);
					// ��ȡ���˾���
					v.getBackground().setColorFilter(new ColorMatrixColorFilter(CLREA_OVER));
					v.setBackground(v.getBackground());
				}else{
					Toast.makeText(getApplicationContext(), "û�����ð���״̬", Toast.LENGTH_SHORT).show();
				}
				return false;
			}
		});
	}
}
